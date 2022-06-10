@extends('base')

@section('content')
@if(count($immunizations))
<table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Vaccine</th>
            <th scope="col">Children Vaccinated</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>1.</td>
            <td>Covax</td>
            <td>{{count(\App\Models\Immunization::all()->where('vaccine','Covax'))}}</td>
            <tr>

            <tr>
            <td>2.</td>
            <td>Pfizer</td>
            <td>{{count(\App\Models\Immunization::all()->where('vaccine','Pfizer'))}}</td>
            </tr>
            <tr>
            <td>3.</td>    
            <td>Johnson & Johnson</td>
            <td>{{count(\App\Models\Immunization::all()->where('vaccine','Johnson & Johnson'))}}</td>
            </tr>
            <tr>
            <td>4.</td>    
            <td>Moderna</td>
            <td>{{count(\App\Models\Immunization::all()->where('vaccine','Moderna'))}}</td>
            </tr>
            <tr>
            <td>5.</td>
            <td>AstraZeneca</td>
            <td>{{count(\App\Models\Immunization::all()->where('vaccine','AstraZeneca'))}}</td>
            </tr>
            <tr>
            <td>6.</td>    
            <td>BioNTech</td>
            <td>{{count(\App\Models\Immunization::all()->where('vaccine','BioNTech'))}}</td>
            </tr>
            <tr>
            <td>7.</td>
            <td>Oxford</td>    
            <td>{{count(\App\Models\Immunization::all()->where('vaccine','Oxford'))}}</td>
            </tr>
        </tbody>
    </table>
    <a href="/" class="btn btn-danger align-right">Back</a>
@endif
    @stop