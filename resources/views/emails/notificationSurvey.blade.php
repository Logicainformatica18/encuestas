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
            src="https://media.licdn.com/dms/image/v2/D4D0BAQHwgX9KJgR4NQ/company-logo_200_200/company-logo_200_200/0/1684956800375/aybarcorpoficial_logo?e=2147483647&v=beta&t=ZUc0MmYZlQn_LKANJXpw8CRrCvW9RH7Z_ioUEUmK2mA" width="240" alt="Logo de la Empresa">
        <br>
        <b>Equipo de {{ config('app.name') }}</b>
        
    </body>
    </html>
