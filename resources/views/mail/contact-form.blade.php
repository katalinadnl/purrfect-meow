<x-mail::message>

# Bonjour {{ $name }},

Merci pour votre message, l'équipe reviendra vers vous dans les plus brefs délais.

Message qui nous a été transmis : 

{{ $message }}

Merci,<br>
L'équipe de {{ config('app.name') }}
</x-mail::message>

