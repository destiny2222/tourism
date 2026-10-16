<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New ADTEA Event Registration</title>
    <style type="text/css">
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        table { border-collapse: collapse !important; }
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; background-color: #f4f6f9; font-family: Arial, sans-serif; }
    </style>
</head>
<body style="margin: 0; padding: 20px 0; background-color: #f4f6f9;">
    <!-- Outer Main Table Wrapper -->
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; background-color: #f4f6f9;">
        <tr>
            <td align="center" style="padding: 20px 10px;">
                <!-- Card Container Table (Width 600) -->
                <table border="0" cellpadding="0" cellspacing="0" width="600" style="width: 100%; max-width: 600px; background-color: #ffffff; border-radius: 12px; overflow: hidden; border: 1px solid #e1e8ed; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
                    
                    <!-- Header Row -->
                    <tr>
                        <td align="center" bgcolor="#0b1b3d" style="padding: 30px 25px; border-bottom: 4px solid #FF7B41; background: linear-gradient(135deg, #0b1b3d 0%, #152e5a 100%);">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td align="center">
                                        <h1 style="color: #ffffff; font-size: 23px; margin: 0 0 6px 0; font-weight: bold; font-family: Arial, sans-serif; letter-spacing: -0.3px;">Tourism Afrikania</h1>
                                        <p style="color: #FF7B41; font-size: 13px; margin: 0; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; font-family: Arial, sans-serif;">2026 Airport Drivers Tourism Education (ADTEA)</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Body Content Row -->
                    <tr>
                        <td style="padding: 30px 25px; background-color: #ffffff;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                
                                <!-- Alert Badge -->
                                <tr>
                                    <td style="padding-bottom: 18px;">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td bgcolor="#FFF0EA" style="padding: 6px 14px; border-radius: 20px; border: 1px solid #FFCBB5;">
                                                    <span style="color: #FF7B41; font-size: 12px; font-weight: bold; text-transform: uppercase; font-family: Arial, sans-serif; letter-spacing: 0.5px;">New Attendee Registration</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Heading & Subheading -->
                                <tr>
                                    <td style="padding-bottom: 20px;">
                                        <h2 style="margin: 0 0 8px 0; color: #111036; font-size: 20px; font-weight: bold; font-family: Arial, sans-serif;">ADTEA Summit Registration Received</h2>
                                        <p style="margin: 0; color: #5C727D; font-size: 14px; line-height: 1.5; font-family: Arial, sans-serif;">An attendee has successfully registered via the ADTEA registration portal. The submitted details are below:</p>
                                    </td>
                                </tr>

                                <!-- Registration Details Table -->
                                <tr>
                                    <td>
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #F8FAFC; border-radius: 8px; border: 1px solid #E2E8F0;">
                                            <tr>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; width: 35%; color: #64748B; font-size: 13px; font-weight: bold; text-transform: uppercase;">Registration Path</td>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #111036; font-size: 15px; font-weight: bold;">{{ $registrationType }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; width: 35%; color: #64748B; font-size: 13px; font-weight: bold; text-transform: uppercase;">Full Name</td>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #111036; font-size: 15px; font-weight: bold;">{{ $name }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #64748B; font-size: 13px; font-weight: bold; text-transform: uppercase;">Email Address</td>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #111036; font-size: 14px;">
                                                    <a href="mailto:{{ $email }}" style="color: #FF7B41; text-decoration: none; font-weight: bold;">{{ $email }}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #64748B; font-size: 13px; font-weight: bold; text-transform: uppercase;">Phone Number</td>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #111036; font-size: 14px;">
                                                    @if(!empty($phone))
                                                        <a href="tel:{{ $phone }}" style="color: #111036; text-decoration: none;">{{ $phone }}</a>
                                                    @else
                                                        <em style="color: #94A3B8;">Not provided</em>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #64748B; font-size: 13px; font-weight: bold; text-transform: uppercase;">Gender</td>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #111036; font-size: 14px;">
                                                    {{ $gender ?: 'Not provided' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #64748B; font-size: 13px; font-weight: bold; text-transform: uppercase;">Occupation</td>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #111036; font-size: 14px;">
                                                    {{ $occupation ?: 'Not provided' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #64748B; font-size: 13px; font-weight: bold; text-transform: uppercase;">Organisation</td>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #111036; font-size: 14px;">
                                                    {{ $organisation ?: 'Not provided' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #64748B; font-size: 13px; font-weight: bold; text-transform: uppercase;">Country</td>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #111036; font-size: 14px;">
                                                    {{ $country ?: 'Not provided' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #64748B; font-size: 13px; font-weight: bold; text-transform: uppercase;">State / Province</td>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #111036; font-size: 14px;">
                                                    {{ $state ?: 'Not provided' }}
                                                </td>
                                            </tr>
                                            @if($registrationType === 'Driver')
                                                <tr>
                                                    <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #64748B; font-size: 13px; font-weight: bold; text-transform: uppercase;">Transport Association</td>
                                                    <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #111036; font-size: 14px;">
                                                        {{ $driverAssociation ?: 'Not provided' }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #64748B; font-size: 13px; font-weight: bold; text-transform: uppercase;">Vehicle / Fleet Type</td>
                                                    <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #111036; font-size: 14px;">
                                                        {{ $driverVehicleType ?: 'Not provided' }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #64748B; font-size: 13px; font-weight: bold; text-transform: uppercase;">Years of Experience</td>
                                                    <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #111036; font-size: 14px;">
                                                        {{ $driverExperience ?: 'Not provided' }}
                                                    </td>
                                                </tr>
                                            @endif
                                            <tr>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #64748B; font-size: 13px; font-weight: bold; text-transform: uppercase;">How They Found Out</td>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #111036; font-size: 14px;">
                                                    {{ $howHeard ?: 'Not provided' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top" style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #64748B; font-size: 13px; font-weight: bold; text-transform: uppercase;">Expectations</td>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #334155; font-size: 14px; line-height: 1.6;">
                                                    @if(!empty($expectations))
                                                        {{ $expectations }}
                                                    @else
                                                        <em style="color: #94A3B8;">No expectations shared</em>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #64748B; font-size: 13px; font-weight: bold; text-transform: uppercase;">Date Submitted</td>
                                                <td style="padding: 14px 18px; border-bottom: 1px solid #E2E8F0; color: #111036; font-size: 13px;">{{ $registeredAt }}</td>
                                            </tr>
                                            <tr>
                                                <td valign="top" style="padding: 14px 18px; color: #64748B; font-size: 13px; font-weight: bold; text-transform: uppercase;">Message / Note</td>
                                                <td style="padding: 14px 18px; color: #334155; font-size: 14px; line-height: 1.6;">
                                                    @if(!empty($contentMessage))
                                                        {{ $contentMessage }}
                                                    @else
                                                        <em style="color: #94A3B8;">No message provided</em>
                                                    @endif
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Footer Notice -->
                                <tr>
                                    <td style="padding-top: 25px; text-align: center;">
                                        <p style="margin: 0; color: #94A3B8; font-size: 12px; line-height: 1.5;">This automated notification was generated by the 2026 ADTEA Event Registration Portal.</p>
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
