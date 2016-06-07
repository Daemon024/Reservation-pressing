<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateReservationRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required',
            'commentaire' => 'required',
            'prestations_id' => 'required',
            'produits_id' => 'required',
            'clients_id' => 'required',
            'employes_id' => 'required',
            'dateDepot' => 'required',
        ];
    }
}
