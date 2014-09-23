<?php

if (!isset($_GET['testingx']) || $_GET['testingx'] != 'hello') {
  header("Location: emailSignupForm.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="The Sneaker Savant" />
  <meta name="description" content="The World's foremost authority on sneaker grading. Get your sneakers professionally graded today!" />
  <meta name="robots" content="index, follow" />
  <title>The Sneaker Savant</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!-- attach JavaScripts -->
  <script src="js/jquery-1.11.1.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <!-- attach Google Analytics -->
   <script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
     ga('create', 'UA-52181856-1', 'thesneakersavant.com');
     ga('send', 'pageview');
   </script>
  <!-- attach CSS styles -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link href='http://fonts.googleapis.com/css?family=EB+Garamond|Cinzel' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico" />
</head>
<body>
  <!-- BODY PAGE CONTENT -->
  <!-- navigation panel -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">The Sneaker Savant</a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-main">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">The Process</a></li>
          <li><a href="#information">Services</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#theFinePrint"><img src="images/key.png" style="max-width: 40px;" alt="TSS key image"/></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <!-- first section - Home -->
  <div id="home" class="home">
    <div class="text-vcenter">
      <h1>The Sneaker galaxy's foremost authority on Sneaker Grading</h1>
      <h3>Don't let others judge your sneakers - we'll do it for you! Let us accurately grade YOUR sneakers; for true collectors, enthusiasts and sneakerheads.</h3>
      <a href="#about" class="btn btn-default btn-lg">Get graded today</a>
    </div>
  </div>
  <!-- /first section -->
  <!-- second section - About -->
  <div id="about" class="pad-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img src="images/logoCircle.png" alt="" />
        </div>
        <div class="col-sm-6 text-center">
          <h2>The Sneaker Savant</h2>
          <p class="lead">Have your sneakers graded by the professionals.
          </p>
          <p class="lead">
            Professional sneaker grading eliminates concerns about grade misrepresentations. We provide you with a professional assessment of the condition and quality of your sneakers. The Sneaker Savant is the only sneaker grading service in the world. 
          </p>
          <p class="lead">
            We'll walk a mile in YOUR shoes! 
            <h2>Get Graded Today.</h2><a href="#bizDetails" data-toggle="modal"><h2 class="text-center">More about The Sneaker Savant Team...</h2></a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- /second section -->
  <!-- third section - Services -->
  <div id="services" class="pad-section">
    <div class="container">
      <h2 class="text-center">The Process</h2> <hr />
      <div class="row text-center">
        <div class="col-sm-4 col-xs-6">
          <i class="glyphicon glyphicon-import"> </i>
          <h4>1. You send us your shoes.</h4>
          <p>Print out <a href="" target="_blank">this form</a>, fill it in, package and send us your shoes (INSURE your shipment). Keep in mind - we don't grade boxes and dirty shoes get lower grades. </p>
        </div>
        <div class="col-sm-4 col-xs-6">
          <i class="glyphicon glyphicon-search"> </i>
          <h4>2. We inspect and grade your shoes.</h4>
          <p>We meticulously inspect, grade, stage and package your shoes. Our grading process is objective. Our packaging options are sturdy, elegant and tamperproof.</p>
        </div>
        <div class="col-sm-4 col-xs-6">
          <i class="glyphicon glyphicon-export"> </i>
          <h4>3. We'll handle the rest. </h4>
          <p>Depending on the service options you've chosen, we'll either send them along to their next destination or we'll sell them for you on eBay for a small percentage. </p>
        </div>
      </div>
       <hr />
       <!-- Open Grading Modal -->
       <a href="#gradingDetails" data-toggle="modal"> <h2 class="text-center">More details about our process...</h2></a>
        <!-- / Grading Modal -->
    </div>
  </div>
  <!-- /third section -->
  <!-- fourth section - Information -->
  <div id="information" class="pad-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="panel-title">Silver Service</h2>
            </div>
            <div class="panel-body lead">
              <p>
              Our Silver service is provided for our customers with shoes that are meant (and still able) to be worn. Red October Yeezy's? This is the service for you. We'll grade, seal them up and give them our classy hang tag. 
              </p>
              <p><small>$39.99 + free shipping</small></p>        
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="panel-title">Gold Service</h2>
            </div>
            <div class="panel-body lead">
              <p>
              Our Gold service is provided for our customers with shoes that would be great for a museum. Jordan XI Concord "45" Samples? This is your service. We'll grade and stage them in a near-museum quality display case. 
              </p>
              <p><small>$84.99 + free shipping</small></p>
              </div>
            </div>
         </div>
         <!-- <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="panel-title">Platinum Service</h2>
            </div>
            <div class="panel-body lead">
              <p>
              Our Platinum service is provided for our customers that just don't have the time to deal with selling their kicks. We sell your shoes on eBay. You send us your kicks. We send you the proceeds of the sale.
              </p>
              <p><small>Service fee + 10% of auction fvf</small></p>
            </div>
          </div> -->
         </div>
      </div>
        <div class="text-vcenter services">         <br><br>
          <a href="/docroot/" class="btn btn-default btn-lg">Fill in the form<br> package your kicks <br> and send it off to us today!</a>
        </div>
    </div>
  </div>
  <!-- /fourth section -->
    <!-- fifth section -->
  <div id="ourGuarantee" class="pad-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Our Guarantee:</h2>
          <h4>The Sneaker Savant will provide collectors with the finest, most thorough, consistent and accurate grading efforts available in the industry. If, for any reason, you are not happy with the service we've provided, contact us and we'll make it right.</h4>
        </div>
      </div>
    </div>
  </div>
  <!-- /fifth section -->
  <!-- sixth section -->
  <div id="buyNow" class="col-sm-4 text-center">
  </div>
  <!-- /sixth section -->
    <!-- seventh section -->
  <div id="contact" class="pad-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="panel panel-default correspondence">
              <div class="panel-heading">
                <h2 class="panel-title">Please send packages to:</h2>
              </div>
              <div class="panel-body lead">
                <p><small>The Sneaker Savant, LLC</small></p>
                <p><small>P.O. Box XXXXXX</small></p>
                <p><small>Oakland, CA</small></p>
                <p><small>94609</small></p>
                <p><small>Call or Text - (415) 582 6655</small></p>               
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="panel panel-default correspondence">
              <div class="panel-heading">
                <h2 class="panel-title">Contact us online:</h2>
              </div>
              <div class="panel-body lead">
                <p><small><a href="http://www.ebay.com/sch/thesneakersavant/m.html?_ipg=50&_sop=12&_rdc=1" target="_blank">Ebay</a></small></p>
                <p><small><a href="https://twitter.com/sneakersavant" target="_blank">Twitter</a></small></p>
                <p><small><a href="http://instagram.com/thesneakersavant" target="_blank">Instagram</a></small></p>
                <p><small><a href="https://www.facebook.com/thesneakersavant?ref=hl&ref_type=bookmark" target="_blank">Facebook</a></small></p>  
                <p><small><a href="mailto:thesneakersavant@gmail.com" target="_top">Email</a></small></p>                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- /seventh section -->
  <!-- eight section -->
  <div id="disclaimers" class="col-sm-12">
    <p></p>
    <p><small></small></p>
    
    
  </div>
  <!-- /eighth section -->
  <!-- footer -->
  <footer>
    <hr />
    <div class="container" class="col-sm-12">
      <p class="text-right">
        <a href="#legalDetails" data-toggle="modal"> Legal </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Copyright &copy; The Sneaker Savant 2014
      </p>
    </div>
  </footer>
  <!-- /footer -->

<!-- START POP UP MODALS -->

    <!-- Modal BizDetails -->
    <div class="modal fade" id="bizDetails" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4>About The Sneaker Savant and Contributors</h4>
          </div>
          <div class="modal-body">
            <div id="PageContent">
              <h4>JTPlatnum</h4>
              <img src="images/profileJTPlatnum.jpg"/><p>The (Original) Sneaker Savant has been collecting shoes for longer than most sneakerheads have been alive. </p>
              <p>The first pair of shoes the Sneaker Savant fell in love with, nearly 25 years ago, was the Black Cement Jordan IV's. He can tell you exactly where he saw them (in the mountains of Northern California), how old he was (9), and how jealous he was of the guy wearing them (very). It took The Sneaker Savant two full years of washing dishes every night (making $10 a month allowance) just so he could afford his first pair of Air Jordans - the Black/Infrared VI's. </p>
              <p>As an adult, the Sneaker Savant spent countless days, months, and years digging up and searching for rare and vintage sneakers. From the Mountains of Northern California to the Bodegas of Brooklyn, the Arcades of London to the Rues of Paris, the Harajuku of Japan and the Bazaars of Africa - the Sneaker Savant has travelled the globe seeking out the freshest kicks in the world.</p>
              <p>With nearly 15 years of experience selling sneakers on eBay, Craigslist and attendance at meet-ups all over the world, the Sneaker Savant maintains a flawless 100% feedback rating. He is known throughout the industry as a straightforward and serious collector of sneakers. From fakes to b-grades, player exclusives, f&amp;f and sales samples, originals, retros and re-issues, the Sneaker Savant has seen it all.</p>
              <p>In 2010, sight unseen, The Sneaker Savant struck a deal with a fellow sneaker head resulting in The Sneaker Savant receiving a pair of sneakers rated as 'excellent condition 9/10'. Upon receipt, the shoes were so worn; there were literally holes in the soles. The Sneaker Savant decided something had to be done. In 2013, the Sneaker Savant teamed up with fellow collectors, friends, consultants, colleagues, lawyers and advisors to determine a fair, unbiased and accurate algorithm for sneaker grading with the sole purpose of leveling the playing field. Now, in 2014, the Sneaker Savant is offering his services to the world.</p>
              <h4>Danposite</h4>
              <p>[Born in 1984 and raised in Brooklyn, NYC] For Danposite, the first pair of shoes that caught his eye caused him to cut 3 periods of school to pick up his first pair of Jordans (XIV Indigo) after watching Reggie Miller play against MJ in an Indiana vs. Chicago game in 1998. It'd be nice if that's all there was to the story, but all they had was a size 12 and Dan is a 9.5...STILL, he bought the size 12 and rocked them to school. Shortly after, in 1999, the Jordan IV Black/Cement retroed and it was a wrap - the habit grabbed ahold of him - it was the first time Dan bought one to rock and one to stock. <p> Danposite and The (Original) Sneaker Savant met in 2003 at Supreme New York and spent many weekends scraping the five boroughs in search of those low down mom and pop sneaker shops before it was cool. Danposite got a job at Atmos NYC in Harlem a couple of years lader and established an extensive network spanning the United States and Europe, including a number of high profile celebrities and atheletes. </p> <p> Cleaning and restoring sneakers is one of Danposites passions...over the past couple of years Danposite has experiemented with many different methods and mixtures of chemical household products to figure out the safest way to keep shoes looking fresh. Danposite is especially proud of his collection of over 30 pairs of original Jordan I's, including og black toes and salesman samples from 1985. His name is Daniel Adam Witkowski and you might know him as Danposite or DanEboy84.</p>
              <h4>Veenomous</h4>
              <p></p>
              <h4></h4>
              <p></p>
            </div>
          </div>
          <div class="modal-footer">
            <a class="btn btn-default" data-dismiss="modal">
              Close
            </a>
          </div>
        </div>
      </div>
    </div>
  <!-- /Modal BizDetails -->
  <!-- Modal Grading Details -->
    <div class="modal fade" id="gradingDetails" role="dialog">
      <div class = "modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4>Grading Process Details</h4>
          </div>
          <div class="modal-body">
            <h4>International users, please <a href="mailto:TheSneakerSavant@gmail.com?Subject=International%20Order" target="_top"> contact us </a> FIRST before ordering.</h4>
            <p>Please note: Nothing will be graded without payment in full. If payment is not received before shoes are received, we will consider them abandoned and deal accordingly.</p>
            <h4>1. You send us your shoes.</h4>
            <p>Be sure to send us your CLEAN shoes (dirty shoes get lower grades) for a more accurate grading. Only send boxes. TSS’s receiving department opens newly arrived packages each morning and immediately verifies that the number of shoes in each package matches the number shown on the form. Once this is done, a more detailed comparison is made to ensure that all invoice descriptions correspond to the actual shoes contained in the shipment. This information is traceable by the invoice number at all stages of the grading process. Before any grading is performed, each pair is examined by a restoration detection professional. If any form of restoration work is detected, this information is noted so it will be available to the grading team. </p>
            <h4>2. We inspect and grade your shoes.</h4>
            <p>Using our unique inspection process, any peculiarities or flaws that may affect a shoe’s grade are tracked. Some examples of this would be “significant toe box creasing,” “scuffs on leather,” “a ¼” inch scratch,” and so forth. When the grader examines the shoes, he is not able to see a previously assigned grade, so as to not influence his own evaluation. Each pair of shoes is methodically examined and reviewed by each of our graders to ensure all experts’ instinctive impressions are in agreement. The graders’ intuitive sense has been developed after many years of examining thousands of pairs of shoes. Our experts are extremely familiar with the many different variations, structures and materials used in mass shoe production since the early 80's. </p>
            <h4>3. We'll handle the rest.</h4>
            <p>After packaging, all shoes go through a quality control inspection. Here, they are examined to make certain that their labels are correct for both the grade and the serial number. Quality control also inspects each case for any flaws, such as scuffs or nicks. While these are quite rare, TSS is careful to make certain that the shoes we grade are not only accurately graded, but attractively presented as well. No matter whether the US Postal Service or some private carrier is used, the method of packaging is essentially the same. The encapsulated shoes are placed inside boxes made of very sturdy cardboard.</p>
            <h4>And the Fine Print...</h4>
            <p>The Sneaker Savant will provide collectors with the finest, most thorough, consistent and accurate grading efforts available in the industry. We guarantee our turnaround time - the time in which the shoes are in the possession of The Sneaker Savant (time in transit, weekends and holidays excluded) and begin the day after your order is received. Failure to meet our deadlines will result in a customer refund. The Sneaker Savant shall not be deemed to be in default of or to have breached any provision of this guarantee as a result of any delay, failure in performance or interruption of the Services, resulting directly or indirectly from acts of God, acts of civil or military authority, civil disturbance, war, fire, floods, epidemics, quarantine restrictions, strikes, freight embargoes, transportation contingencies, shortages of facilities, fuel, energy, labor or materials, or laws, regulations, acts or order of any government agency or official thereof, other catastrophes, delays of subcontractors or suppliers arising from unforeseeable causes beyond the control and without the fault or negligence of either the Contractor or the subcontractors or suppliers, or any other circumstances beyond Provider's reasonable control. In the event of any such delay or failure, the parties shall defer performance of the Services to a date and time mutually agreeable.</p>
            </div>
          <div class="modal-footer">
            <a class="btn btn-default" data-dismiss="modal">
              Close
            </a>
          </div>
        </div>
      </div>
    </div>
  <!-- /Modal Grading Details -->
  <!-- Modal Legal -->
    <div class="modal fade" id="legalDetails" role="dialog">
      <div class = "modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4>Legal Notices</h4>
          </div>
          <div class="modal-body">
            <div id="PageContent">
             <h3>Disclaimer</h3>
                <p>The information contained in thesneakersavant.com is for general information purposes only. The information is provided by thesneakersavant.com and while we endeavour to keep the information up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to thesneakersavant.com or the information, products, services, or related graphics contained on thesneakersavant.com for any purpose. Any reliance you place on such information is therefore strictly at your own risk.</p><p>In no event will we be liable for any loss or damage including without limitation, indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits arising out of, or in connection with, the use of thesneakersavant.com.</p><p>Through thesneakersavant.com you are able to link to other websites which are not under the control of thesneakersavant.com. We have no control over the nature, content and availability of those sites. The inclusion of any links does not necessarily imply a recommendation or endorse the views expressed within them.</p><p>Every effort is made to keep thesneakersavant.com up and running smoothly. However,thesneakersavant.com takes no responsibility for, and will not be liable for, thesneakersavant.com being temporarily unavailable due to technical issues beyond our control.</p>
              <h3>Linking Policy</h3>
                <p>Status of linking policy</p><p>thesneakersavant.com welcomes links to this website [made in accordance with the terms of this linking policy].[This linking policy is intended to assist you when linking to this website.] OR [By using this website you agree to be bound by the terms and conditions of this linking policy.]</p><p>Links to thesneakersavant.com</p><p>Links pointing to thesneakersavant.com should not be misleading.</p><p>Appropriate link text should be always be used. [From time to time we may update the URL structure of our website, and unless we agree in writing otherwise, you are responsible for updating said links.] You must not use our logo to link to this website (or otherwise) without our express written permission.</p><p>You must not frame the content of this website or use any similar technology in relation to the content of this website.</p><p>Links from this website</p><p>This website includes links to other websites owned and operated by third parties. These links are not endorsements or recommendations.</p><p>thesneakersavant.com has no control over the contents of third party websites, and thesneakersavant.com accepts no responsibility for them or for any loss or damage that may arise from your use of them.</p><p>Removal of links</p><p>You agree that, should we request the deletion of a link to thesneakersavant.com that is within your control, you will delete the link promptly.</p><p>If you would like us to remove a link to your website that is included on thesneakersavant.com, please contact us using the contact details below. Note that unless you have a legal right to demand removal, such removal will be at our discretion.]</p><p>Changes to this linking policy</p><p>We may amend this linking policy at any time by publishing a new version on this website.</p><p>Contact us</p><p>Should you have any questions about this linking policy, please contact us using the details set out below:</p><p>Contact Email: thesneakersavant@gmail.com,All Rights Reserved.</p>
              <h3>Privacy Policy</h3>
                <p>Welcome to thesneakersavant.com (the "Site").We understand that privacy online is important to users of our Site, especially when conducting business.This statement governs our privacy policies with respect to those users of the Site ("Visitors") who visit without transacting business and Visitors who register to transact business on the Site and make use of the various services offered by The Sneaker Savant, LLC (collectively, "Services") ("Authorized Customers").</p><p>"Personally Identifiable Information"refers to any information that identifies or can be used to identify, contact, or locate the person to whom such information pertains, including, but not limited to, name, address, phone number, fax number, email address, financial profiles, social security number, and credit card information. Personally Identifiable Information does not include information that is collected anonymously (that is, without identification of the individual user) or demographic information not connected to an identified individual.</p><p>What Personally Identifiable Information is collected?</p><p>We may collect basic user profile information from all of our Visitors. We collect the following additional information from our Authorized Customers: the names, addresses, phone numbers and email addresses of Authorized Customers, the nature and size of the business, and the nature and size of the advertising inventory that the Authorized Customer intends to purchase or sell.</p><p>What organizations are collecting the information?</p><p>In addition to our direct collection of information, our third party service vendors (such as credit card companies, clearinghouses and banks) who may provide such services as credit, insurance, and escrow services may collect this information from our Visitors and Authorized Customers. We do not control how these third parties use such information, but we do ask them to disclose how they use personal information provided to them from Visitors and Authorized Customers. Some of these third parties may be intermediaries that act solely as links in the distribution chain, and do not store, retain, or use the information given to them.</p><p>How does the Site use Personally Identifiable Information?</p><p>We use Personally Identifiable Information to customize the Site, to make appropriate service offerings, and to fulfill buying and selling requests on the Site. We may email Visitors and Authorized Customers about research or purchase and selling opportunities on the Site or information related to the subject matter of the Site. We may also use Personally Identifiable Information to contact Visitors and Authorized Customers in response to specific inquiries, or to provide requested information.</p><p>With whom may the information may be shared?</p><p>Personally Identifiable Information about Authorized Customers may be shared with other Authorized Customers who wish to evaluate potential transactions with other Authorized Customers. We may share aggregated information about our Visitors, including the demographics of our Visitors and Authorized Customers, with our affiliated agencies and third party vendors. We also offer the opportunity to "opt out" of receiving information or being contacted by us or by any agency acting on our behalf.</p><p>How is Personally Identifiable Information stored?</p><p>Personally Identifiable Information collected by The Sneaker Savant, LLC is securely stored and is not accessible to third parties or employees of The Sneaker Savant, LLC except for use as indicated above.</p><p>What choices are available to Visitors regarding collection, use and distribution of the information?</p><p>Visitors and Authorized Customers may opt out of receiving unsolicited information from or being contacted by us and/or our vendors and affiliated agencies by responding to emails as instructed, or by contacting us at P.O. Box XXXXXX, Oakland, CA 94609</p><p>Are Cookies Used on the Site?</p><p>Cookies are used for a variety of reasons. We use Cookies to obtain information about the preferences of our Visitors and the services they select. We also use Cookies for security purposes to protect our Authorized Customers. For example, if an Authorized Customer is logged on and the site is unused for more than 10 minutes, we will automatically log the Authorized Customer off.</p><p>How does The Sneaker Savant, LLC use login information?</p><p>The Sneaker Savant, LLC uses login information, including, but not limited to, IP addresses, ISPs, and browser types, to analyze trends, administer the Site, track a user's movement and use, and gather broad demographic information.</p><p>What partners or service providers have access to Personally Identifiable Information from Visitors and/or Authorized Customers on the Site?</p><p>The Sneaker Savant, LLC has entered into and will continue to enter into partnerships and other affiliations with a number of vendors.Such vendors may have access to certain Personally Identifiable Information on a need to know basis for evaluating Authorized Customers for service eligibility. Our privacy policy does not cover their collection or use of this information. Disclosure of Personally Identifiable Information to comply with law. We will disclose Personally Identifiable Information in order to comply with a court order or subpoena or a request from a law enforcement agency to release information. We will also disclose Personally Identifiable Information when reasonably necessary to protect the safety of our Visitors and Authorized Customers.</p><p>How does the Site keep Personally Identifiable Information secure?</p><p>All of our employees are familiar with our security policy and practices. The Personally Identifiable Information of our Visitors and Authorized Customers is only accessible to a limited number of qualified employees who are given a password in order to gain access to the information. We audit our security systems and processes on a regular basis. Sensitive information, such as credit card numbers or social security numbers, is protected by encryption protocols, in place to protect information sent over the Internet. While we take commercially reasonable measures to maintain a secure site, electronic communications and databases are subject to errors, tampering and break-ins, and we cannot guarantee or warrant that such events will not take place and we will not be liable to Visitors or Authorized Customers for any such occurrences.</p><p>How can Visitors correct any inaccuracies in Personally Identifiable Information?</p><p>Visitors and Authorized Customers may contact us to update Personally Identifiable Information about them or to correct any inaccuracies by emailing us at thesneakersavant@gmail.com</p><p>Can a Visitor delete or deactivate Personally Identifiable Information collected by the Site?</p><p>We provide Visitors and Authorized Customers with a mechanism to delete/deactivate Personally Identifiable Information from the Site's database by contacting . However, because of backups and records of deletions, it may be impossible to delete a Visitor's entry without retaining some residual information. An individual who requests to have Personally Identifiable Information deactivated will have this information functionally deleted, and we will not sell, transfer, or use Personally Identifiable Information relating to that individual in any way moving forward.</p><p>What happens if the Privacy Policy Changes?</p><p>We will let our Visitors and Authorized Customers know about changes to our privacy policy by posting such changes on the Site. However, if we are changing our privacy policy in a manner that might cause disclosure of Personally Identifiable Information that a Visitor or Authorized Customer has previously requested not be disclosed, we will contact such Visitor or Authorized Customer to allow such Visitor or Authorized Customer to prevent such disclosure.</p><p>Links:</p><p>thesneakersavant.com contains links to other web sites. Please note that when you click on one of these links, you are moving to another web site. We encourage you to read the privacy statements of these linked sites as their privacy policies may differ from ours.</p>
              <h3>Terms of Use</h3>
                <p>PLEASE READ! thesneakersavant.com REQUIRES CONSIDERATION FOR AND AS A CONDITION OF ALLOWING YOU ACCESS.</p><p>READING AND ACCEPTING THE TERMS OF USE AND READING AND ACCEPTING THE PROVISIONS OF THE PRIVACY POLICY OF thesneakersavant.com ARE REQUIRED CONSIDERATIONS FOR thesneakersavant.com GRANTING YOU THE RIGHT TO VISIT, READ OR INTERACT WITH IT.</p><p>ALL PERSONS ARE DENIED ACCESS TO THIS SITE UNLESS THEY READ AND ACCEPT THE TERMS OF USE AND THE PRIVACY POLICY.</p><p>BY VIEWING, VISITING, USING, OR INTERACTING WITH thesneakersavant.com OR WITH ANY BANNER, POP-UP, OR ADVERTISING THAT APPEARS ON IT, YOU ARE AGREEING TO ALL THE PROVISIONS OF THIS TERMS OF USE POLICY AND THE PRIVACY POLICY OF thesneakersavant.com.</p><p>ALL PERSONS UNDER THE AGE OF 18 ARE DENIED ACCESS TO thesneakersavant.com. IF YOU ARE UNDER 18 YEARS OF AGE, IT IS UNLAWFUL FOR YOU TO VISIT, READ, OR INTERACT WITH thesneakersavant.com OR ITS CONTENTS IN ANY MANNER. thesneakersavant.com SPECIFICALLY DENIES ACCESS TO ANY INDIVIDUAL THAT IS COVERED BY THE CHILD ONLINE PRIVACY ACT (COPA) OF 1998.</p><p>thesneakersavant.com RESERVES THE RIGHT TO DENY ACCESS TO ANY PERSON OR VIEWER FOR ANY REASON. UNDER THE TERMS OF THE PRIVACY POLICY, WHICH YOU ACCEPT AS A CONDITION FOR VIEWING, thesneakersavant.com IS ALLOWED TO COLLECT AND STORE DATA AND INFORMATION FOR THE PURPOSE OF EXCLUSION AND FOR MANY OTHER USES.</p><p>THE TERMS OF USE AGREEMENT MAY CHANGE FROM TIME TO TIME. VISITORS HAVE AN AFFIRMATIVE DUTY, AS PART OF THE CONSIDERATION FOR PERMISSION TO VIEW thesneakersavant.com, TO KEEP THEMSELVES INFORMED OF CHANGES. </p><p>PARTIES TO THE TERMS OF USE AGREEMENT</p><p>Visitors, viewers, users, subscribers, members, affiliates, or customers, collectively referred to herein as "Visitors," are parties to this agreement. The website and its owners and/or operators are parties to this agreement, herein referred to as "Website."</p><p>USE OF INFORMATION FROM THIS WEBSITE</p><p>Unless you have entered into an express written contract with this website to the contrary, visitors, viewers, subscribers, members, affiliates, or customers have no right to use this information in a commercial or public setting; they have no right to broadcast it, copy it, save it, print it, sell it, or publish any portions of the content of this website. By viewing the contents of this website you agree this condition of viewing and you acknowledge that any unauthorized use is unlawful and may subject you to civil or criminal penalties. Again, Visitor has no rights whatsoever to use the content of, or portions thereof, including its databases, invisible pages, linked pages, underlying code, or other intellectual property the site may contain, for any reason for any use whatsoever. Nothing. Visitor agrees to liquidated damages in the amount of U.S.$100,000 in addition to costs and actual damages for breach of this provision. Visitor warrants that he or she understands that accepting this provision is a condition of viewing and that viewing constitutes acceptance.</p><p>OWNERSHIP OF WEBSITE OR RIGHT TO USE, SELL, PUBLISH CONTENTS OF THIS WEBSITE</p><p>The website and its contents are owned or licensed by the website. Material contained on the website must be presumed to be proprietary and copyrighted. Visitors have no rights whatsoever in the site content. Use of website content for any reason is unlawful unless it is done with express contract or permission of the website.</p><p>HYPERLINKING TO SITE, CO-BRANDING, "FRAMING" AND REFERENCING SITE PROHIBITED</p><p>Unless expressly authorized by website, no one may hyperlink this site, or portions thereof, (including, but not limited to, logotypes, trademarks, branding or copyrighted material) to theirs for any reason. Further, you are not allowed to reference the url (website address) of this website in any commercial or non-commercial media without express permission, nor are you allowed to 'frame' the site. You specifically agree to cooperate with the Website to remove or de-activate any such activities and be liable for all damages.You hereby agree to liquidated damages of US $100,000.00 plus costs and actual damages for violating this provision.</p><p>DISCLAIMER FOR CONTENTS OF SITE</p><p>The website disclaims any responsibility for the accuracy of the content of this website. Visitors assume the all risk of viewing, reading, using, or relying upon this information. Unless you have otherwise formed an express contract to the contrary with the website, you have no right to rely on any information contained herein as accurate. The website makes no such warranty.</p><p>DISCLAIMER FOR HARM CAUSED TO YOUR COMPUTER OR SOFTWARE FROM INTERACTING WITH THIS WEBSITE OR ITS CONTENTS. VISITOR ASSUMES ALL RISK OF VIRUSES, WORMS, OR OTHER CORRUPTING FACTORS. </p><p>The website assumes no responsibility for damage to computers or software of the visitor or any person the visitor subsequently communicates with from corrupting code or data that is inadvertently passed to the visitor's computer. Again, visitor views and interacts with this site, or banners or pop-ups or advertising displayed thereon, at his own risk. </p><p>DISCLAIMER FOR HARM CAUSED BY DOWNLOADS </p><p>Visitor downloads information from this site at his own risk. Website makes no warranty that downloads are free of corrupting computer codes, including, but not limited to, viruses and worms. </p><p>LIMITATION OF LIABILITY </p><p>By viewing, using, or interacting in any manner with this site, including banners, advertising, or pop-ups, downloads, and as a condition of the website to allow his lawful viewing, Visitor forever waives all right to claims of damage of any and all description based on any causal factor resulting in any possible harm, no matter how heinous or extensive, whether physical or emotional, foreseeable or unforeseeable, whether personal or business in nature. </p><p>INDEMNIFICATION </p><p>Visitor agrees that in the event he causes damage, which the Website is required to pay for, the Visitor, as a condition of viewing, promises to reimburse the Website for all. </p><p>SUBMISSIONS </p><p>Visitor agrees as a condition of viewing, that any communication between Visitor and Website is deemed a submission. All submissions, including portions thereof, graphics contained thereon, or any of the content of the submission, shall become the exclusive property of the Website and may be used, without further permission, for commercial use without additional consideration of any kind. Visitor agrees to only communicate that information to the Website, which it wishes to forever allow the Website to use in any manner as it sees fit. "Submissions" is also a provision of the Privacy Policy. </p><p>NOTICE</p><p>No additional notice of any kind for any reason is due Visitor and Visitor expressly warrants an understanding that the right to notice is waived as a condition for permission to view or interact with the website. </p><p>DISPUTES</p><p>As part of the consideration that the Website requires for viewing, using or interacting with this website, Visitor agrees to use binding arbitration for any claim, dispute, or controversy ("CLAIM") of any kind (whether in contract, tort or otherwise) arising out of or relating to this purchase, this product, including solicitation issues, privacy issues, and terms of use issues. </p><p>Arbitration shall be conducted pursuant to the rules of the American Arbitration Association which are in effect on the date a dispute is submitted to the American Arbitration Association. Information about the American Arbitration Association, its rules, and its forms are available from the American Arbitration Association, 335 Madison Avenue, Floor 10, New York, New York, 10017-4605. Hearing will take place in the city or county of the Seller. </p><p>In no case shall the viewer, visitor, member, subscriber or customer have the right to go to court or have a jury trial. Viewer, visitor, member, subscriber or customer will not have the right to engage in pre-trial discovery except as provided in the rules; you will not have the right to participate as a representative or member of any class of claimants pertaining to any claim subject to arbitration; the arbitrator's decision will be final and binding with limited rights of appeal. </p><p>The prevailing party shall be reimbursed by the other party for any and all costs associated with the dispute arbitration, including attorney fees, collection fees, investigation fees, travel expenses. </p><p>JURISDICTION AND VENUE </p><p>If any matter concerning this purchase shall be brought before a court of law, pre- or post-arbitration, Viewer, visitor, member, subscriber or customer agrees to that the sole and proper jurisdiction to be the state and city declared in the contact information of the web owner unless otherwise here specified. In the event that litigation is in a federal court, the proper court shall be the closest federal court to the Seller's address. </p><p>APPLICABLE LAW</p><p>Viewer, visitor, member, subscriber or customer agrees that the applicable law to be applied shall, in all cases, be that of the state of the Seller. </p><p>CONTACT INFORMATION </p><p>The Seller of this product is:</p><p> Mailing address: The Sneaker Savant, LLC P.O. Box XXXXXX Oakland, CA 94609 United States</p><p>Contact Email: thesneakersavant@gmail.com, All Rights Reserved.</p>
              <h3>Testimonials Disclosure</h3>
                <p>Unique experiences and past performances do not guarantee future results! Testimonials herein are unsolicited and are non-representative of all clients; certain accounts may have worse performance than that indicated. involves risk and there is always the potential for loss. Your results may vary. If you do not have the extra capital that you can afford to lose, you should not invest in the market.<p>               
            </div> 
          </div>
          <div class="modal-footer">
            <a class="btn btn-default" data-dismiss="modal">
              Close
            </a>
          </div>
        </div>
      </div>
    </div>
  <!-- /Modal Legal -->
</body>
</html>

                            
                            
                            
                            
                            
                            