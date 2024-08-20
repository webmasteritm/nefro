<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style='padding: 0; background-color: #ffffff;'>
    <div
        style='margin: 0; width: 100%; background-color: #ffffff; padding: 70px 0 70px 0; -webkit-text-size-adjust: none;'>
        <table height='100%' width='100%'>
            <tr>
                <td align='center' valign='top'>
                    <div>
                        <p style='margin-top: 0;'><img src='assets/img/05.png' alt='Nefrouros-Unidad-Renal' </p>
                    </div>
                    <table width='600'
                        style='border: 1px solid #e5e5e5; width: 628px; background-color: #fdfdfd; border-radius: 46px; box-shadow: 0 1px 8px 2px rgba(0,0,0,0.1);'>
                        <tr>
                            <td align='center' valign='top'>
                                <!-- Header -->
                                <table
                                    style='border-bottom: 0; line-height: 100%; vertical-align: middle; font-family:Helvetica, Roboto, Arial, sans-serif; width: 628px; background-color: #ee7820; font-weight: 300; color: #ffffff; border-radius: 46px 46px 0 0;'>
                                    <tr>
                                        <td
                                            style='padding: 36px 48px; display: block; padding-top: 36px; padding-bottom: 36px; padding-left: 48px; padding-right: 48px;'>
                                            <h1
                                                style='line-height: 150%; margin: 0; text-shadow: 0 1px 0 #ab79a1; text-align: center; font-size: 30px; font-family:Helvetica, Roboto, Arial, sans-serif; font-weight: 300; color: #ffffff;'>
                                                Evaluacion o Sugrencia</h1>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align='center' valign='top'>
                                <!-- Body -->
                                <table width='600' style='width: 628px;'>
                                    <tr>
                                        <td>
                                            <!-- Content -->
                                            <table border='0' cellpadding='20' width='100%'>
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <p>Fecha: {{ $datos['evaluar1'] }}</p>
                                                            <p>Nombres: {{ $datos['evaluar3'] }}</p>
                                                            <p>Correo electronico: {{ $datos['evaluar4'] }}</p>
                                                            <p>Telefono: {{ $datos['evaluar5'] }}</p>
                                                            <p>EPS: {{ $datos['evaluar6'] }}</p>
                                                            <p>Recomendaría a familiares y amigos la unidad renal:
                                                                {{ $datos['evaluar7'] }}</p>
                                                            <p>Cómo evalúa la experiencia de los servicios recibidos:
                                                                {{ $datos['evaluar8'] }}</p>
                                                            <p>Comentario: {{ $datos['evaluar9'] }}</p>
                                                            <p>Servicio que desea evaluar: {{ $datos['evaluar10'] }}
                                                            </p>
                                                            <p>conoce usted los derechos y deberes de la unidad renal:
                                                                {{ $datos['evaluar11'] }}</p>
                                                            <p>Resumen del comentario: {{ $datos['evaluar12'] }}</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- End Content -->
                                        </td>
                                    </tr>
                                </table>
                                <!-- End Body -->
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td align='center' valign='top'>
                    <!-- Footer -->
                    <table style='width: 628px;'>
                        <tr>
                            <td>
                                <table width='100%'>
                                    <tr>
                                        <td align='center' valign='top' '
                                            <p style="margin: 0 0 16px;">Copyright IT Management Zomac S.A.S. All Rights
                                                Reserved
                                                <br><a href=' https://www.itmsas.net/ ' target=' _blank '
                                                    style=' font-weight: normal; text-decoration: underline; color:
                                            #F57D00; '>Desarrollado
                                                    por IT Management</a>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <!-- End Footer -->
                </td>
            </tr>
        </table>
    </div>

</body>
</html>
