<x-mail::message>
# SHIPWISE QUOTE REQUEST

## Name: {{ $data["name"] }}
## Email: {{ $data["email"] }}
## Contact: {{ $data["contact"] }}
## Freight Type: {{ $data["type"] }}
## Origin: {{ $data["origin"] }}
## Destination: {{ $data["destination"] }}
## Weight: {{ $data["weight"] }}
## Dimensions: {{ $data["dimensions"] }}
## Special Handling Requirments: 
{{ $data["requirement"] != "" ? $data["requirement"] : '-- NO Special Handling Requirments --' }}

{{ config('app.name') }}
</x-mail::message>
