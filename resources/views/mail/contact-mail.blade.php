<x-mail::message>
# SHIPWISE CONTACT

## Name: {{ $data["name"] }}
## Email: {{ $data["email"] }}
## Contact: {{ $data["contact"] }}
## Company: {{ $data["company"] }}
## Message: 
{{ $data["message"] != "" ? $data["message"] : '-- NO Message --' }}

{{ config('app.name') }}
</x-mail::message>
