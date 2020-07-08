Hello {{$certificate->first_name}} {{$certificate->last_name}}<br>
Your certificate has been created. You can  <a
        href="{{env('APP_URL')}}/certificates/d/{{$certificate->hngi_id}}">download it here</a>