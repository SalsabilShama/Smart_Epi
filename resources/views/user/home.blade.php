@extends('user.partials.template')
@section('title')
Home
@endsection
@section('main')
   <div class="header_section">

     
      <!-- banner section start -->
      <div id="main_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="banner_section">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">EPI Vaccination<br><span style="color: #151515;">Program</span></h1>
                           <p class="banner_text">A digitalized system for Expanded Programme on Immunization for Children</p>
                           <div class="btn_main">
                              <div class="more_bt"><a href="{{url('/registration')}}">Registration Now</a></div>
                              <div class="contact_bt"><a href="https://old.dghs.gov.bd/index.php/en/mis-docs/epi">Get A Guideline</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="{{asset('template/images/Vaccination-1.JPG')}}" style="width: 580px; height: 431px;"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="banner_section">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">COVID-19 Vaccination<br><span style="color: #151515;">Program</span></h1>
                           <p class="banner_text">COVID-19 Vaccination for Children Integrated with EPI</p>
                           <div class="btn_main">
                              <div class="more_bt"><a href="{{url('/registration')}}">Registration Now</a></div>
                              <div class="contact_bt"><a href="https://surokkha.gov.bd/enroll">Get A Guideline</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="{{asset('template/images/Vaccination-6.JPG')}}" style= "width: 580px; height: 431px;"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="banner_section">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">EPI and COVID Vaccination<br><span style="color: #151515;">Joint Program</span></h1>
                           <p class="banner_text">Secured Integration of EPI with COVID-19 Vaccination for Children</p>
                           <div class="btn_main">
                              <div class="more_bt"><a href="{{url('/registration')}}">Registration Now</a></div>
                              <div class="contact_bt"><a href="{{asset('template/images/Future_Scope.jpg')}}">Get A Guideline</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="{{asset('template/images/Vaccination-4.JPG')}}" style= "width: 580px; height: 431px;"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" style="font-size:24px; padding-top: 4px;"></i>
         </a>
         <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" style="font-size:24px; padding-top: 4px;"></i>
         </a>
      </div>
   </div>
   <!-- banner section end -->
   <!-- health section start -->
   <div class="health_section layout_padding">
      <div class="container">
         <h1 class="health_taital" style="color: #18F8F8;text-align: center;">EPI</h1>
         <p style="text-align: justify; color: #1C2833;font-size: 18px">
            Expanded Program on Immunization (EPI) is a program that aims to ensure that children receive vaccines that protect them from preventable diseases. In Bangladesh, EPI is implemented by the Ministry of Health and Family Welfare,
            and it provides vaccines to children free of cost. The vaccines are provided 
            to children through a network of health facilities, outreach programs, and vaccination campaigns. The program aims to reach all children under one year 
            of age, and it has been successful in reducing the incidence of vaccine preventable diseases in Bangladesh.It is important to note that parents and caregivers should ensure that their children receive all the recommended vaccines under the EPI program to ensure that they are protected from these diseases. Vaccination not only protects the individual child but also contributes to the overall public health of the community by preventing the spread of infectious diseases.
</p>
         
         <div class="health_section layout_padding">
            <div class="row">
               <div class="col-sm-7">
                  <div class="image_main">
                     <div class="main">
                        <img src="{{asset('template/images/tika-2.png')}}" alt="Avatar" class="image" style="width:100%;height: 365px">
                     </div>
                     
                  </div>
               </div>
               <div class="col-sm-5">
                  <div class="image_main_1">
                     <div class="main">
                        <img src="{{asset('template/images/tika-1.png')}}" alt="Avatar" class="image" style="width:100% width: 350px; height: 365px;">
                     </div>
                     
                  </div>
               </div>
            </div>
            <div class="getquote_bt_1"><a target="_blank" href="https://old.dghs.gov.bd/index.php/en/mis-docs/epi">Read More <span><img src=""></span></a></div>
         </div>
         <h1 class="health_taital" style="color: #18F8F8; text-align: center;">COVID-19 Vaccination for Children </h1>
         
         <p style="text-align: justify; color: #1C2833;font-size: 18px">The COVID-19 vaccination program in Bangladesh has been a crucial endeavor in the nation's fight against the pandemic. Launched in early 2021, the program aimed to vaccinate a significant portion of the population to achieve herd immunity and curb the spread of the virus. The government collaborated with international organizations and vaccine manufacturers to secure a diverse range of vaccines, enabling a widespread vaccination effort. Vaccination centers were set up across the country, focusing initially on healthcare workers, essential personnel, and vulnerable populations. Information campaigns were conducted to address vaccine hesitancy and ensure public awareness. As the program progressed, eligibility widened to include the general population, accelerating the vaccination rate. Challenges such as distribution logistics and equitable access in rural areas were addressed through innovative solutions. The COVID-19 vaccination program in Bangladesh represents a concerted national response to the global pandemic, playing a vital role in safeguarding public health and resuming socio-economic activities.</p>


         <h1 class="health_taital" style="color: #18F8F8;text-align: center;">Joint Vaccination Program of EPI & COVID-19 </h1>
         <p style="text-align: justify; color: #1C2833;font-size: 18px">The EPI program, established by the WHO in 1974, aims to ensure all infants have access to 
vital vaccinations to prevent six diseases: measles, polio, and tuberculosis. It involves 
collaborations with governments, international foundations, and NGOs to distribute vaccines, 
such as cold chain management, vaccine safety monitoring, and healthcare personnel training. 
The program supports the development and implementation of immunization policies, 
guidelines, and regulations at national and international levels. GAVI and UNICEF provide 
technical assistance, funding, and resources to support immunization programs in low- and 
middle-income countries. The Expanded Programme on Immunization (EPI) is a global public health program that provides life-saving vaccines to children worldwide. Established by the WHO in 1974, the EPI aims to address the global health crisis caused by vaccine-preventable diseases, particularly those disproportionately affecting children in low- and middle-income countries. The program follows the WHO-recommended immunization schedule, utilizing strategies like routine 
immunization services, national campaigns, and outreach activities. In Asia, the EPI program 
is implemented by national governments in collaboration with international organizations like 
UNICEF and WHO, providing technical assistance, funding, and resources to support 
immunization programs.
COVID-19 vaccination practices for children vary across countries, with the United States, 
Canada, the United Kingdom, and the European Union offering the Pfizer-BioNTech vaccine 
for children aged 5-11 years old. The vaccine is safe and effective, with side effects similar to 
adults. In Asia, countries like China, Japan, Israel, and the Philippines have started offering 
vaccinations for children aged 12-15 years old. However, India has not yet authorized any 
COVID-19 vaccines for children, but clinical trials are ongoing for the Covaxin vaccine.
Bangladesh aims to reduce the spread of COVID-19, prevent severe illness, hospitalization, 
and death, and end the pandemic through a vaccination program. The program combines 
government-led initiatives and private-sector partnerships, using vaccines from OxfordAstraZeneca, Sinopharm, and Pfizer-BioNTech. Priority groups include frontline health 
workers, people over 65, and government officials. The vaccination program involves online 
registration, card download, and awareness campaigns. Despite challenges like vaccine 
shortages and hesitancy, the program continues to work towards saving those most at risk.
</p>
         
      </div>
   </div>
   <!-- health section end -->

   <!-- knowledge section end -->
   <div class="knowledge_section layout_padding">
      <div class="container">
         <div class="knowledge_main">
            <div class="left_main">
               <h1 class="knowledge_taital"> Be A Responsible Parent and Get Your Child Vaccinated on time</h1>
               <p class="knowledge_text"><!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam --></p>
            </div>
            <div class="right_main">
               <div class=""><a target="_blank" href="https://www.youtube.com/watch?v=K6bd3gefhc0"><img src="{{asset('template/images/play-icon.png')}}"></a></div>
            </div>
         </div>
      </div>
   </div>
   <!-- knowledge section end -->
   <!-- news section start -->
   <div class="news_section layout_padding">
      <div class="container">
         <h1 class="health_taital">Cooming Soon!</h1>
         <p class="health_text">(Future Scope)</p>
         <div class="news_section_2 layout_padding">
            <div class="row">
              
               <div class="col-lg-4 col-sm-6">
                  <div class="box_main">
                     <div class="icon_1"><img src="{{asset('template/images/reg-icon1.png')}}"></div>
                     <h4 class="daily_text">Online Registration</h4>
                  </div>
               </div>

              <div class="col-lg-4 col-sm-6">
                  <div class="box_main active">
                     <div class="icon_1"><img src="{{asset('template/images/notification-icon1.png')}}"></div>
                     <h4 class="daily_text">Notifications</h4>
                  </div>
               </div>

               
            <!--   <div class="col-lg-4 col-sm-6">
                  <div class="box_main active">
                     <div class="icon_1"><img src="{{asset('template/images/notification-icon1.png')}}"></div>
                     <h4 class="daily_text_1"> On Time Notifications</h4>
                  </div>
               </div>
             -->
               <div class="col-lg-4 col-sm-6">
                  <div class="box_main">
                     <div class="icon_1"><img src="{{asset('template/images/updated-1.png')}}"></div>
                     <h4 class="daily_text_1">EPI & COVID-19 Updates </h4>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- news section end -->
   <!-- contact section start -->
   <div class="contact_section layout_padding">
      <div class="container">
         <h1 class="contact_taital">Vaccine List</h1>
         <div class="news_section_2">
            <div class="row">
               <div class="col-md-6">
                  <div class="icon_main">
                     <!-- <div class="icon_7"><img src="images/icon-7.png"></div> -->
                     <h4 class="diabetes_text">COVID-19</h4>
                  </div>
                  
                  <div class="icon_main">
                     <!-- <div class="icon_7"><img src="images/icon-7.png"></div> -->
                     <h4 class="diabetes_text">Polio </h4>
                  </div>
                  <div class="icon_main">
                     <!-- <div class="icon_7"><img src="images/icon-5.png"></div> -->
                     <h4 class="diabetes_text">Hepatitis A</h4>
                  </div>
                  <div class="icon_main">
                     <!-- <div class="icon_7"><img src="images/icon-6.png"></div> -->
                     <h4 class="diabetes_text">MPOX</h4>
                  </div>
                   <div class="getquote_bt_1"><a target="_blank" href="https://old.dghs.gov.bd/index.php/en/mis-docs/epi">Read More <span><img src=""> </span></a></div>
               </div>
               <div class="col-md-6">
                  <div class="contact_box">
                     <h1 class="book_text">Drop Your Query/Massage </h1>
                     <input type="text" class="Email_text" placeholder="Name" name="Name">
                     <input type="email" class="Email_text" placeholder="Your Email" name="Email">
                     <textarea class="massage-bt" placeholder="Query/Massage" rows="5" id="comment" name="Massage"></textarea>
                     <div class="send_bt"><a href="#">SEND</a></div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
   <!-- contact section end -->
   <!-- client section start -->
   <div class="client_section layout_padding">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <h1 class="client_taital">About Us</h1>
                  <h2 style="padding-bottom: 80px;">Our team has been formed to achieve the goal to integrate and propose a structured model for EPI and COVID-19 Vaccination for Children in Bangladesh.</h2>

               <h2 class="client_taital"style="text-align:center" style="padding-bottom: 80px;">Project Supervisors</h2>
            

<div class="row">
  <div class="column">
    <div class="card">
      <img src="{{asset('template/images/teacher.png')}}" alt="" style="width:100%;">
      <div class="container" style="text-align:center">
        <h2>Lt Col Muhammad Nazrul Islam, PhD</h2>
        <p class="title">Associate Professor</p>
        <p>Supervisor</p>
        <p>Department of CSE, MIST</p>
        <p>nazrul@cse.mist.ac.bd</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="{{asset('template/images/teacher.png')}}" alt="" style="width:100%;">
      <div class="container" style="text-align:center">
        <h2>Dr. Kazi Abu Taher </h2>
        <p class="title">Professor</p>
        <p>Co-Supervisor</p>
        <p>Bangladesh University Of Professionals (BUP)</p>
        <p>kataher@bup.edu.bd</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>


<div>
<h3 class="client_taital"style="text-align:center">Our Team</h3>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="{{asset('template/images/teacher.png')}}" alt="" style="width:100%">
      <div class="container" style="text-align:center">
        <h2>Salsabil Shama</h2>
        <p class="title"></p>
        <p></p>
        <p>shama.ss242@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="{{asset('template/images/teacher.png')}}" alt="" style="width:100%">
      <div class="container" style="text-align:center">
        <h2>Shraboni Dey Prapti</h2>
        <p class="title"></p>
        <p></p>
        <p>praptishraboni1@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="{{asset('template/images/teacher.png')}}" alt="" style="width:100%">
      <div class="container" style="text-align:center">
        <h2>Sharmin Shabnam </h2>
        <p class="title"></p>
        <p></p>
        <p>shabnamsharmin26@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</div>

                  <!-- <div class="client_section_2">
                     <div class="client_left">
                        <div><img src="images/client-img.png" class="client_img"></div>
                     </div>
                     
                  </div> -->
               </div>
            </div>
         <!--    <div class="carousel-item">
               <div class="container">
                  <h1 class="client_taital">What People Say</h1>
                  <p class="client_text">It is a long established fact that a reader will be distracted </p>
                  <div class="client_section_2">
                     <div class="client_left">
                        <div><img src="images/client-img.png" class="client_img"></div>
                     </div>
                     <div class="client_right">
                        <h3 class="distracted_text">Distracted by</h3>
                        <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                        <div class="quote_icon"><img src="images/quote-icon.png"></div>
                     </div>
                  </div>
               </div>
            </div> -->
         <!--    <div class="carousel-item">
               <div class="container">
                  <h1 class="client_taital">What People Say</h1>
                  <p class="client_text">It is a long established fact that a reader will be distracted </p>
                  <div class="client_section_2">
                     <div class="client_left">
                        <div><img src="images/client-img.png" class="client_img"></div>
                     </div>
                     <div class="client_right">
                        <h3 class="distracted_text">Distracted by</h3>
                        <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                        <div class="quote_icon"><img src="images/quote-icon.png"></div>
                     </div>
                  </div>
               </div>
            </div> -->
         </div>
         <!-- <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" style="font-size:24px; padding-top: 4px;"></i>
         </a>
         <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" style="font-size:24px; padding-top: 4px;"></i>
         </a> -->
      </div>
   </div>
   <!-- client section end -->
@endsection