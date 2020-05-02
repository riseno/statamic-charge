<?php

namespace Silentz\Charge\Http\Requests;

class CreateSubscriptionRequest extends ChargeRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'plan' => 'required',
            'payment_method' => 'required',
        ];
    }
}
