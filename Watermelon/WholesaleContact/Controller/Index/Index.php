<?php

namespace Watermelon\WholesaleContact\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action
{


    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
        // 1. POST request : Get incoming data
        $post = (array) $this->getRequest()->getPost();

        if (!empty($post)) {
            // Retrieve your form data
            $firstname   = $post['firstname'];
            $lastname    = $post['lastname'];
            $address1    = $post['address1'];
            $address2    = $post['address2'];
            $city        = $post['city'];
            $state       = $post['state'];
            $zipcode     = $post['zipcode'];
            $phone       = $post['phone'];
            $email       = $post['email'];
            $company     = $post['company'];
            $companyalt  = $post['companyalt'];
            $ein         = $post['ein'];
            $geo         = implode(",",$post['geo']);
            $revenue     = $post['revenue'];
            $numberofyears = $post['numberofyears'];
            $howdidyouhear = $post['howdidyouhear'];
            $decor       = implode(",",$post['decor']);



            // Doing-something with...
            //email data
            $to      = 'joel@watermelonwebworks.com';
            $subject = 'Wholesale Registration Submission';
            $message = '<h1>Wholesale Registration Submission</h1><br/><br/>';
            $message .= 'First Name: '.$firstname.'<br/>';
            $message .= 'Last Name: '.$lastname.'<br/>';
            $message .= 'Address 1: '.$address1.'<br/>';
            $message .= 'Address 2: '.$address2.'<br/>';
            $message .= 'City: '.$city.'<br/>';
            $message .= 'State: '.$state.'<br/>';
            $message .= 'ZIP Code: '.$zipcode.'<br/>';
            $message .= 'Phone: '.$phone.'<br/>';
            $message .= 'Email: '.$email.'<br/>';
            $message .= 'Company: '.$company.'<br/>';
            $message .= 'Company Alt Name or DBA: '.$companyalt.'<br/>';
            $message .= 'EIN: '.$firstname.'<br/>';
            $message .= 'EIN (Employer Identification Number): '.$ein.'<br/>';
            $message .= 'Business Geographic Region: '.$geo.'<br/>';
            $message .= 'What is your annual revenue?: '.$revenue.'<br/>';
            $message .= 'Number of years operating: '.$numberofyears.'<br/>';
            $message .= 'How did you hear about us?: '.$howdidyouhear.'<br/>';
            $message .= 'Describe your decor style: '.$decor.'<br/>';

            $headers = 'From: webmaster@rolfglass.com' . "\r\n" .
                'Reply-To: webmaster@rolfglass.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            //$headers .= "CC: cc@example.com\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            mail($to, $subject, $message, $headers);


            // Display the succes form validation message
            $this->messageManager->addSuccessMessage('Thank you for registering. We will be in contact with you after we review your submission.');

            //NO NEED TO REDIRECT
            // Redirect to your form page (or anywhere you want...)
            //$resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            //$resultRedirect->setUrl('/');

            //return $resultRedirect;
        }
        // 2. GET request : Render the contact page
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}