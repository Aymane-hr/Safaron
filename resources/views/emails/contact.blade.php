<!DOCTYPE html>
<html>
<head>
    <title>Nouveau message de contact</title>
</head>
<body style="font-family: sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #eee; border-radius: 10px;">
        <h2 style="color: #ed553b; border-bottom: 2px solid #ed553b; padding-bottom: 10px;">Nouveau Message de Contact</h2>
        
        <p><strong>Nom :</strong> {{ $data['name'] }}</p>
        <p><strong>Email :</strong> {{ $data['email'] }}</p>
        <p><strong>Sujet :</strong> {{ $data['subject'] }}</p>
        
        <div style="background: #f9f9f9; padding: 15px; border-radius: 5px; margin-top: 20px;">
            <p><strong>Message :</strong></p>
            <p style="white-space: pre-wrap;">{{ $data['message'] }}</p>
        </div>
        
        <p style="margin-top: 30px; font-size: 0.8em; color: #777;">
            Ce message a été envoyé depuis le formulaire de contact de Safaron.
        </p>
    </div>
</body>
</html>
