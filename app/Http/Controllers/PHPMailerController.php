<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PHPMailerController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function mail(Request $request)
    {
        // dd($request);

        $username = $request->name;

        $email = $request->email;

        $textarea = $request->message;

        $contact = $request->Contact;

        // dd($request);
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);

        try {

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'nvikram.sts@gmail.com';
            $mail->Password = 'aobrybjlsgxjrkxr';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('nvikram.sts@gmail.com', 'Joan Technologies');
            $mail->addAddress('hello@joantechnologies.com');


            $mail->isHTML(true);

            $mail->Subject = 'Contact Form - Enquiry';
            $mail->Body    = "<html>
            <head>
            <title>Enquiry Form</title>
            </head>
            <body>
            <h2>Hello Sir / Madam</h2>
            <p style='font-size:16px;'>Contact Enquiries
            </p>
            <h4 style='background-color:#e0e0eb;padding: 5px;'>Contact Details:</h4>
            <table style='border:2px solid;width:50%;border-collapse: collapse;'>
            <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;'><h4>Name</h4></td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>$username</td>
            </tr>
            <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;'><h4>E-mail</h4></td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>$email</td>
            </tr>
            <tr>
            <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;'><h4>Contact</h4></td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>$contact</td>
            </tr>
            <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;'><h4>Message</h4></td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>$textarea</td>
            </tr>



            </table>
            </body>
            </html>
            ";




            // $mail->AltBody = plain text version of email body;

            if (!$mail->send()) {
                return back()->with("error", "Email not sent.")->withErrors($mail->ErrorInfo);
            } else {
                return back()->with("success", "Email has been sent.");
            }
        } catch (Exception $e) {
            return back()->with('error', 'Message could not be sent.');
        }
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
