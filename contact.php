<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Configurar fuso horário para Brasil
date_default_timezone_set('America/Sao_Paulo');

// Só aceita POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Método não permitido']);
    exit;
}

// Receber dados JSON
$input = json_decode(file_get_contents('php://input'), true);

// Validação básica
if (empty($input['name']) || empty($input['email']) || empty($input['service']) || empty($input['message'])) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Campos obrigatórios não preenchidos']);
    exit;
}

// Sanitizar dados
$name = htmlspecialchars(trim($input['name']));
$email = filter_var(trim($input['email']), FILTER_VALIDATE_EMAIL);
$phone = htmlspecialchars(trim($input['phone'] ?? ''));
$service = htmlspecialchars(trim($input['service']));
$message = htmlspecialchars(trim($input['message']));

if (!$email) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Email inválido']);
    exit;
}

// Carregar PHPMailer
require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'noreplyyagotiandrade@gmail.com';
    $mail->Password   = 'tkhw blef gcgm oldz';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    $mail->CharSet    = 'UTF-8';

    // Remetente e destinatário
    $mail->setFrom('noreplyyagotiandrade@gmail.com', 'Portfólio Yago Andrade');
    $mail->addAddress('yagotiandrade@gmail.com', 'Yago Andrade');
    $mail->addReplyTo($email, $name);

    // Mapear serviços
    $services = [
        'desenvolvimento' => '🚀 Desenvolvimento de Sistemas',
        'powerbi' => '📊 Dashboard Power BI',
        'consultoria' => '💡 Consultoria em TI',
        'redes' => '🌐 Redes de Computadores',
        'suporte' => '🛠️ Suporte Técnico',
        'database' => '🗄️ Banco de Dados',
        'outro' => '🔧 Outro serviço'
    ];
    
    $serviceLabel = $services[$service] ?? $service;

    // Conteúdo do email com layout profissional
    $mail->isHTML(true);
    $mail->Subject = "🚀 Nova Solicitação de Orçamento - $serviceLabel";
    
    $htmlBody = "
    <!DOCTYPE html>
    <html lang='pt-BR'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Nova Solicitação de Orçamento</title>
        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
            
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f4f6f9;
                color: #333;
                line-height: 1.6;
                padding: 20px 0;
            }
            
            .email-container {
                max-width: 650px;
                margin: 0 auto;
                background: #ffffff;
                border-radius: 16px;
                overflow: hidden;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            }
            
            .header {
                background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%);
                color: white;
                padding: 40px 30px;
                text-align: center;
                position: relative;
            }
            
            .header::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><defs><pattern id=\"grid\" width=\"20\" height=\"20\" patternUnits=\"userSpaceOnUse\"><path d=\"M 20 0 L 0 0 0 20\" fill=\"none\" stroke=\"rgba(255,255,255,0.1)\" stroke-width=\"0.5\"/></pattern></defs><rect width=\"100\" height=\"100\" fill=\"url(%23grid)\"/></svg>');
                opacity: 0.3;
            }
            
            .header-content {
                position: relative;
                z-index: 1;
            }
            
            .logo {
                font-size: 28px;
                font-weight: 800;
                margin-bottom: 10px;
                text-shadow: 0 2px 4px rgba(0,0,0,0.2);
            }
            
            .subtitle {
                font-size: 16px;
                opacity: 0.9;
                font-weight: 300;
            }
            
            .content {
                padding: 40px 30px;
                background: #ffffff;
            }
            
            .welcome-message {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                color: white;
                padding: 20px;
                border-radius: 12px;
                margin-bottom: 30px;
                text-align: center;
            }
            
            .welcome-message h2 {
                font-size: 24px;
                margin-bottom: 8px;
                font-weight: 600;
            }
            
            .welcome-message p {
                opacity: 0.9;
                font-size: 14px;
            }
            
            .info-grid {
                display: grid;
                gap: 20px;
                margin-bottom: 30px;
            }
            
            .info-card {
                background: #f8f9fc;
                border: 1px solid #e9ecef;
                border-radius: 12px;
                padding: 20px;
                transition: all 0.3s ease;
                border-left: 4px solid #ff6b35;
            }
            
            .info-label {
                font-size: 12px;
                font-weight: 600;
                color: #6c757d;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                margin-bottom: 8px;
                display: flex;
                align-items: center;
                gap: 8px;
            }
            
            .info-value {
                font-size: 16px;
                font-weight: 500;
                color: #2c3e50;
                word-wrap: break-word;
            }
            
            .message-card {
                background: linear-gradient(135deg, #f8f9fc 0%, #e9ecef 100%);
                border-radius: 12px;
                padding: 25px;
                margin-bottom: 30px;
                border-left: 4px solid #28a745;
            }
            
            .message-card .info-label {
                color: #28a745;
                font-size: 14px;
                margin-bottom: 15px;
            }
            
            .message-card .info-value {
                background: white;
                padding: 20px;
                border-radius: 8px;
                border: 1px solid #dee2e6;
                font-size: 15px;
                line-height: 1.7;
                color: #495057;
            }
            
            .footer {
                background: #2c3e50;
                color: #bdc3c7;
                padding: 30px;
                text-align: center;
            }
            
            .footer-title {
                color: #ecf0f1;
                font-size: 18px;
                font-weight: 600;
                margin-bottom: 15px;
            }
            
            .footer p {
                font-size: 14px;
                margin-bottom: 8px;
                line-height: 1.5;
            }
            
            .contact-info {
                background: #34495e;
                padding: 20px;
                border-radius: 8px;
                margin-top: 20px;
            }
            
            .contact-info strong {
                color: #ff6b35;
            }
            
            .priority-badge {
                display: inline-block;
                background: #dc3545;
                color: white;
                padding: 4px 12px;
                border-radius: 20px;
                font-size: 11px;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                margin-left: 10px;
            }
            
            .timestamp {
                background: #e9ecef;
                padding: 15px;
                border-radius: 8px;
                text-align: center;
                font-size: 14px;
                color: #6c757d;
                margin-top: 20px;
            }
            
            @media (max-width: 600px) {
                .email-container { margin: 10px; border-radius: 12px; }
                .header, .content, .footer { padding: 25px 20px; }
                .logo { font-size: 24px; }
                .welcome-message h2 { font-size: 20px; }
            }
        </style>
    </head>
    <body>
        <div class='email-container'>
            <div class='header'>
                <div class='header-content'>
                    <div class='logo'>Yago Andrade</div>
                    <div class='subtitle'>Desenvolvedor Full Stack & Business Intelligence</div>
                </div>
            </div>
            
            <div class='content'>
                <div class='welcome-message'>
                    <h2>🎯 Nova Oportunidade de Negócio</h2>
                    <p>Solicitação recebida através do portfólio profissional</p>
                </div>
                
                <div class='info-grid'>
                    <div class='info-card'>
                        <div class='info-label'>👤 Nome Completo</div>
                        <div class='info-value'>$name</div>
                    </div>
                    
                    <div class='info-card'>
                        <div class='info-label'>📧 Email de Contato</div>
                        <div class='info-value'>$email</div>
                    </div>
                    
                    <div class='info-card'>
                        <div class='info-label'>📱 Telefone</div>
                        <div class='info-value'>" . ($phone ?: '<em>Não informado</em>') . "</div>
                    </div>
                    
                    <div class='info-card'>
                        <div class='info-label'>⚙️ Serviço Solicitado <span class='priority-badge'>Prioridade</span></div>
                        <div class='info-value'>$serviceLabel</div>
                    </div>
                </div>
                
                <div class='message-card'>
                    <div class='info-label'>📝 Descrição Detalhada do Projeto</div>
                    <div class='info-value'>" . nl2br($message) . "</div>
                </div>
                
                <div class='timestamp'>
                    <strong>🕐 Recebido em:</strong> " . date('d/m/Y \à\s H:i:s') . " (Horário de Brasília)
                </div>
            </div>
            
            <div class='footer'>
                <div class='footer-title'>📞 Próximos Passos</div>
                <p>✅ Responder este email em até 24 horas</p>
                <p>✅ Agendar reunião para discussão do projeto</p>
                <p>✅ Elaborar proposta personalizada</p>
                
                <div class='contact-info'>
                    <p><strong>Email do Cliente:</strong> $email</p>
                    <p><strong>Resposta Automática:</strong> Clique em 'Responder' para contatar diretamente</p>
                    <p><strong>Portfólio:</strong> Sistema automatizado de captação de leads</p>
                </div>
            </div>
        </div>
    </body>
    </html>
    ";
    
    $mail->Body = $htmlBody;
    
    // Versão texto alternativa melhorada
    $mail->AltBody = "
    ==========================================
    🚀 NOVA SOLICITAÇÃO DE ORÇAMENTO
    ==========================================
    
    DADOS DO CLIENTE:
    👤 Nome: $name
    📧 Email: $email
    📱 Telefone: " . ($phone ?: 'Não informado') . "
    ⚙️ Serviço: $serviceLabel
    
    DESCRIÇÃO DO PROJETO:
    " . str_repeat('─', 40) . "
    $message
    " . str_repeat('─', 40) . "
    
    🕐 Recebido em: " . date('d/m/Y H:i:s') . "
    
    PRÓXIMOS PASSOS:
    ✅ Responder em até 24 horas
    ✅ Agendar reunião
    ✅ Elaborar proposta
    
    Para responder, use: $email
    ==========================================
    ";

    $mail->send();
    
    echo json_encode([
        'success' => true, 
        'message' => 'Email enviado com sucesso!'
    ]);

} catch (Exception $e) {
    error_log("Erro no PHPMailer: " . $mail->ErrorInfo);
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Erro ao enviar email. Tente novamente.'
    ]);
}
?>