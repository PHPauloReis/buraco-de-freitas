@php
    $name = $formData['name'];
    $email = $formData['email'];
    $message = $formData['message'];
@endphp

O usuário <strong>{{ $name }} ({{ $email }})</strong>, enviou a seguinte mensagem: <br>
{{ $message }}
