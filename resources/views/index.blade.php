<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>

</head>

<body>
@foreach($user as $aUser)

    <h1>Datos del usuario:{{$aUser->name}}</h1>
    <l1>email:{{$aUser->email}}</l1>
    <p>Los telefonos del usuario:</p>

    <lu>
        <p>Relacion simple</p>
        @foreach($aUser->phones as $phone)
            <li> {{$phone->prefix}} -  {{$phone->phone_number}}</li>
        @endforeach

    </lu>
    <lu>

        @foreach($aUser->roles as $r)
            <li> Rol User:  {{$r->name}}, Add bye: {{$r->pivot->added_by}}, date: {{$aUser->created_at}} </li>
        @endforeach

    </lu>
    <p>Relacion de Through de 1 a 1:"Phone have One Sim"</p>
    <li>Sim asociadas: {{$aUser->phoneSim->company?? 'No Company'}}</li>
    <li>Sim asociadas: {{$aUser->phoneSim->serial_number?? 'No have serial Number'}}</li>
    <p>Relacion de Through de 1 a M:"Phone have Many Sim's"</p>
    @foreach($aUser->phoneSims as $aPhoneSim)
        <li>Sim Company: {{$aPhoneSim->company?? 'No Company'}}</li>
        <li>Sim serial Number: {{$aPhoneSim->serial_number?? 'No have serial Number'}}</li>
    @endforeach

    <p>Relacion de Morph: de 1 a 1:"Image have one User or Post"</p>

  <li>{{$aUser->image->url??'no hay imagen'}}</li>

    <p>Relacion de Morph: de 1 a M :"User have many Images"</p>
    @foreach($aUser->images as $aPost)

        <li> {{$aPost->url?? 'No have image'}}</li>

    @endforeach
    <p>Relacion de Morph: de M a M :" Many User have many Images"</p>




@endforeach






</body>


</html>
