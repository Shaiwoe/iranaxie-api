<?php

namespace App\Candy\Frontend\Payment\Exchange;

use App\Controllers\BaseController;
use App\Models\Exchange;

class ZibalController extends BaseController
{
    public function purchase($id)
    {
        $exchange = Exchange::whereStatus('pending')->find($id);

        if (!$exchange) {

            return view('zibal.failed');
        }

        $url = url('candy/frontend/payment/exchange/complete', ['id' => $id]);

        // Calculate price
        $amount = (($exchange->amount * $exchange->price) + $exchange->fee) * 10;

        $entity = \PG\Zibal\Entity::instance()
            ->setAmount($amount)
            ->setBack($url);

        $request = new \PG\Zibal\Purchase\Request($entity);

        $response = $request->response();

        $isFine = $response->fine();

        if (!$isFine) {

            return view('zibal.failed');
        }

        $track = $response->track();

        $data = ['payment_track' => $track];

        $exchange->fill($data);
        $exchange->save();

        return view('zibal.purchase')
            ->withExchange($exchange);
    }

    public function complete($id)
    {
        $exchange = Exchange::whereStatus('pending')->first();

        if (!$exchange) {

            return view('zibal.failed');
        }

        // Calculate price
        $amount = (($exchange->amount * $exchange->price) + $exchange->fee) * 10;

        $entity = \PG\Zibal\Entity::instance()
            ->setAmount($amount)
            ->setTrack($exchange->payment_track);

        $request = new \PG\Zibal\Complete\Request($entity);

        $response = $request->response();

        $isFine = $response->fine();

        if (!$isFine) {

            return view('zibal.failed');
        }

        $data = ['status' => 'paid'];

        $exchange->fill($data);
        $exchange->save();

        return view('zibal.complete')
            ->withExchange($exchange);
    }
}
