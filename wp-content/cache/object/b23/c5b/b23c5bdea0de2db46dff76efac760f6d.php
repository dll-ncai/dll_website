Àë(e<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":24:{s:2:"ID";i:5407;s:11:"post_author";s:1:"2";s:9:"post_date";s:19:"2019-06-11 09:51:00";s:13:"post_date_gmt";s:19:"2019-06-11 09:51:00";s:12:"post_content";s:9843:"<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Diagnostic screening is one of the most fundamental requirements in any medical treatment procedure. Most of the diagnostic screening processes rely heavily on expensive laboratory equipment and trained professional who operate the machinery. Diagnostic screening processes are generally invasive and it may take more than a day for results to come back from laboratory. Under normal medical conditions we have the flexibility and resources to take each patientâ€™s medical tests which help the doctor in diagnosing the patientâ€™s condition. However, in the case of an epidemic breakout or a resource constrained settings, it is not possible to have the results of every patient tested in a medical laboratory. This makes our project an ideal solution for this condition; as we will be providing a near real-time diagnosis of the patient based on his/her vital signs. To achieve the desired goal of the project, non-invasive techniques are used to collect physiological, clinical, and laboratory parameters of the infected subjects. The acquired data is fed in to an Artificial Intelligence powered device which is accompanied by an Android application, providing an easy-to-interact interface for both the doctors and the patients.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"align":"left","level":1,"textColor":"accent"} -->
<h1 class="has-accent-color has-text-color has-text-align-left">Objectives</h1>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li>To develop a non-invasive system for the acquisition of parameters on an easy-to-use, cost-effective diagnostic device that can swiftly and accurately measure vital health parameters and perform on-time screening for dengue fever detection.</li><li>To develop an Android Application where the user logs in and enters and views their medical parameters (both clinical and physiological). The AI-powered expert system will take in the clinical and laboratory parameters of a patient and determine whether the patient has dengue fever or not.</li></ul>
<!-- /wp:list -->

<!-- wp:heading {"align":"left","level":1,"textColor":"accent"} -->
<h1 class="has-accent-color has-text-color has-text-align-left">Methods</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">We designed non-invasive artificial intelligent system for the acquisition of several clinical and laboratory parameters to perform on-time screening for dengue fever detection. Following physiological, clinical, and laboratory parameters were considered after consultation with medical experts and in line with the literature review under the AI powered research for dengue fever detection.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered":true} -->
<ol><li>PHYSIOLOGICAL<ul><li>Gender</li><li>Weight</li></ul></li><li>CLINICAL<ul><li>Petechial Rash</li><li>Conjuctivity</li><li>Gastric Pain</li><li>Abdominal Pain</li><li>Chill</li><li>Bleeding</li><li>Headache</li><li>Vomit</li><li>Macular</li></ul></li><li>LABORATORY<ul><li>Hematocrit (HCT)</li><li>Respiratory rate</li><li>Pulse Rate</li><li>Pulse Pressure</li><li>Temperature</li><li>Extracellular water (ECW)</li><li>Intracellular water (ICW)</li><li>Blood Oxygen Level (SPO<sub>2</sub>&nbsp;)</li></ul></li></ol>
<!-- /wp:list -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Due to limited availability of real patientsâ€™ data, synthetic data for laboratory parameters was generated after confirming the ranges by visiting doctors. Total data entries generated synthetically were 12,000 in number. To acquire clinical parameters, an AI powered medical chatbot has been designed which effectively interacts with the patients to obtain the clinical symptoms. The medical chatbot has been developed and trained using API.AI from where the access token for the bot has been embedded in the Android application to provide a user interface with runtime answering bot.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":5452,"sizeSlug":"large","className":"is-style-default"} -->
<figure class="wp-block-image size-large is-style-default"><img src="http://dll.seecs.nust.edu.pk/wp-content/uploads/2020/06/idoc_system-1024x368.png" alt="" class="wp-image-5452"/></figure>
<!-- /wp:image -->

<!-- wp:gallery {"ids":[5459,5460],"align":"center"} -->
<figure class="wp-block-gallery aligncenter columns-2 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="http://dll.seecs.nust.edu.pk/wp-content/uploads/2020/06/teledoc_2-1.jpeg" alt="" data-id="5459" data-full-url="http://dll.seecs.nust.edu.pk/wp-content/uploads/2020/06/teledoc_2-1.jpeg" data-link="http://dll.seecs.nust.edu.pk/idoc-a-portable-cost-effective-diagnostic-screening-device-for-early-dengue-fever-detection-2017/teledoc_2-1/" class="wp-image-5459"/></figure></li><li class="blocks-gallery-item"><figure><img src="http://dll.seecs.nust.edu.pk/wp-content/uploads/2020/06/teledoc_4-1.jpeg" alt="" data-id="5460" data-full-url="http://dll.seecs.nust.edu.pk/wp-content/uploads/2020/06/teledoc_4-1.jpeg" data-link="http://dll.seecs.nust.edu.pk/idoc-a-portable-cost-effective-diagnostic-screening-device-for-early-dengue-fever-detection-2017/teledoc_4-1/" class="wp-image-5460"/></figure></li></ul></figure>
<!-- /wp:gallery -->

<!-- wp:heading {"align":"left","level":1,"textColor":"accent"} -->
<h1 class="has-accent-color has-text-color has-text-align-left">Field Work</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">After acquiring the clinical, laboratory, and physiological parameters of the subject, we implemented and trained two classifiers: Multivariate Logistic Regression and Support Vector Machines (SVMs). For testing purposes, real data was acquired from Military Hospital and Holy Family Hospital, during the dengue breakout in 2019. The real data acquisition is shown in Figure.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">We acquired the available clinical and laboratory parameters of twenty-five patients suffering from dengue. The control data (twenty subjects) was obtained from within the university. Figure shows a glimpse of the raw tabulated clinical and laboratory data that we</p>
<!-- /wp:paragraph -->

<!-- wp:gallery {"ids":[5538,5539,5537,5536]} -->
<figure class="wp-block-gallery columns-3 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="http://dll.seecs.nust.edu.pk/wp-content/uploads/2020/06/fever_data_1-1-1024x768.jpg" alt="" data-id="5538" data-full-url="http://dll.seecs.nust.edu.pk/wp-content/uploads/2020/06/fever_data_1-1.jpg" data-link="http://dll.seecs.nust.edu.pk/idoc-a-portable-cost-effective-diagnostic-screening-device-for-early-dengue-fever-detection-2017/fever_data_1-1/" class="wp-image-5538"/></figure></li><li class="blocks-gallery-item"><figure><img src="http://dll.seecs.nust.edu.pk/wp-content/uploads/2020/06/fever_data-1-150x150.jpg" alt="" data-id="5539" data-full-url="http://dll.seecs.nust.edu.pk/wp-content/uploads/2020/06/fever_data-1.jpg" data-link="http://dll.seecs.nust.edu.pk/idoc-a-portable-cost-effective-diagnostic-screening-device-for-early-dengue-fever-detection-2017/fever_data-1/" class="wp-image-5539"/></figure></li><li class="blocks-gallery-item"><figure><img src="http://dll.seecs.nust.edu.pk/wp-content/uploads/2020/06/fever_data_2-1-768x1024.jpg" alt="" data-id="5537" data-full-url="http://dll.seecs.nust.edu.pk/wp-content/uploads/2020/06/fever_data_2-1.jpg" data-link="http://dll.seecs.nust.edu.pk/idoc-a-portable-cost-effective-diagnostic-screening-device-for-early-dengue-fever-detection-2017/fever_data_2-1/" class="wp-image-5537"/></figure></li><li class="blocks-gallery-item"><figure><img src="http://dll.seecs.nust.edu.pk/wp-content/uploads/2020/06/fever_data_5-1-1024x768.jpeg" alt="" data-id="5536" data-full-url="http://dll.seecs.nust.edu.pk/wp-content/uploads/2020/06/fever_data_5-1.jpeg" data-link="http://dll.seecs.nust.edu.pk/idoc-a-portable-cost-effective-diagnostic-screening-device-for-early-dengue-fever-detection-2017/fever_data_5-1/" class="wp-image-5536"/></figure></li></ul></figure>
<!-- /wp:gallery -->

<!-- wp:heading {"align":"left","level":1,"textColor":"accent"} -->
<h1 class="has-accent-color has-text-color has-text-align-left">Results</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">The obtained data was pre-processed and successful test was conducted under the recent data in field conditions. By using Radial Basis Function (RBF) as kernel, the accuracy obtained on the test data was 88% as shown in Figure. There are several indicators of the dengue fever and transferring those symptoms, comprising of laboratory and clinical parameters, on an AI powered system can help in early diagnosis which can further assist in the outbreak forecasts. Our proposed solution is currently undergoing clinical trials with the collaboration of Military Hospital Rawalpindi. Its accuracy can be further improved by using a larger dataset and combining various machine learning techniques.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":"5461","sizeSlug":"full","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><img src="http://dll.seecs.nust.edu.pk/wp-content/uploads/2020/06/fever_3.png" alt="" class="wp-image-5461"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":"5462","sizeSlug":"full","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><img src="http://dll.seecs.nust.edu.pk/wp-content/uploads/2020/06/fever_4.png" alt="" class="wp-image-5462"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->";s:10:"post_title";s:100:"iDoc: A portable, cost-effective diagnostic screening device for early dengue fever detection (2017)";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:96:"idoc-a-portable-cost-effective-diagnostic-screening-device-for-early-dengue-fever-detection-2017";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2020-06-13 17:48:14";s:17:"post_modified_gmt";s:19:"2020-06-13 17:48:14";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:0;s:4:"guid";s:36:"http://dll.seecs.nust.edu.pk/?p=5407";s:10:"menu_order";i:0;s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}}