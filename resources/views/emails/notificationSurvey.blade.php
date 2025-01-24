    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Notificación</title>
    </head>
    <body>
        <p>Estimado/a {{ $survey->created_bys->names }},</p>

        <p>Le informamos que una nueva persona se ha inscrito en el formulario <strong>"{{ $survey->title }}"</strong>.</p>
    
        <p>Puede acceder al sistema para ver más detalles en el siguiente enlace:</p>
        <p>
            <a href="{{ config('app.url') }}" style="color: #1a73e8; text-decoration: none;">Ingresar al Sistema</a>
        </p>
    
        <p>Saludos cordiales,</p>
        <br>
        <img 
            src="{{ asset('logo.png') }}" width="240" alt="Logo de la Empresa">
        <br>
        <b>Equipo de {{ config('app.name') }}</b>
        
    </body>
    </html>
