<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga Courses</title>
    <?php include('links.php'); ?>

    <style>
    /* Basic Styles */
    body {
        font-family: 'Arial', sans-serif;
    }

    h1 {
        margin-bottom: 30px;
    }

    /* Custom styles for the scrollable layout */
    .course-layout {
        display: flex;
        justify-content: space-between;
    }

    .left-column {
        background-color: #f9f9f9;
        padding: 20px;
        border-right: 2px solid #ddd;
        height: 100%;
        
       
    }

    
    .left-column a {
       
        display: block;
        padding: 10px 20px;
        margin-bottom: 15px;
        background-color: #fff0ba;
        color: black;
        border:2px solid #e6b400;
        text-align: left;
        border-radius: 5px;
        transition: all 0.3s;
        text-decoration: none;
    }

    .left-column a:hover {
        box-shadow: inset 0 0 10px #e6b400;
        background-color: white;
        color: black;
        text-decoration: none;
        border: 2px solid #e6b400;
    }

    .right-column {
        padding: 20px;
        max-height: 110vh;
        overflow-y: auto;
    }

    .right-column h2 {
        margin-bottom: 15px;
    }



    /* Smooth scroll */
    html {
        scroll-behavior: smooth;
    }

    /* For responsiveness */
    @media (max-width: 768px) {
        .course-layout {
            flex-direction: column;
        }

        .left-column {
            border-right: none;
            border-bottom: 2px solid #ddd;
        }
    }

    /* Hide content sections by default */
    .content {
        display: none;
    }

    /* Show active content */
    .active-content {
        display: block;
    }

    .yoga_btn {
        background-color: #45060b;
        color: white;
        padding: 10px 20px;
        text-align: center;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .yoga_btn:hover {
        background-color: white;
        color: #45060b;
        border-color: #45060b;
        box-shadow: inset 0 0 10px #45060b;
    }

    /* Add active class styles for buttons */
    .yoga_btn.active {
        background-color: white;
        color: #45060b;
        border: 2px solid #45060b;
        box-shadow: inset 0 0 10px #45060b;
    }
    </style>
</head>

<body>
    <?php include('header.php'); ?>

    <section class="courses_yoga container">
        <h1 class="text-center mt-4">Our Yoga <span>Courses</span></h1>

        <div class="row text-center mt-4">
            <div class="col-md-4">
                <button id="btn1" class="yoga_btn w-100 mb-4" onclick="showContent(1)">OFFLINE YOGA COURSES</button>
            </div>
            <div class="col-md-4">
                <button id="btn2" class="yoga_btn w-100 mb-4" onclick="showContent(2)">ONLINE YOGA COURSES</button>
            </div>
            <div class="col-md-4">
                <button id="btn3" class="yoga_btn w-100 mb-4" onclick="showContent(3)">SHORT YOGA COURSES</button>
            </div>
        </div>

        <!-- Content for Course 1 -->
        <div id="content1" class="content active-content mt-4">
            <div class="course-layout">
                <div class="left-column col-md-4">
                    <a href="#topic1">100 Hours Yoga Teacher Training Course</a>
                    <a href="#topic2">200 Hours Yoga Teacher Training Course</a>
                    <a href="#topic3">300 Hours Yoga Teacher Training Course</a>
                    <a href="#topic4">500 Hours Yoga Teacher Training Course</a>
                    <a href="#topic5">3 Days Yoga Retreat Program</a>
                    <a href="#topic6">5 Days Yoga Retreat Program</a>
                    <a href="#topic7">7 Days Yoga Retreat Program</a>
                    <a href="#topic8">10 Days Yoga Retreat Program</a>
                    <a href="#topic9">14 Days Yoga Retreat Program</a>
                    <a href="#topic10">200 Hours Kundalini Yoga Course</a>
                    <a href="#topic11">Sound Healing Yoga Course</a>
                    <a href="#topic12">Ayurveda Yoga Course</a>
                    <a href="#topic13">Aerial Yoga Course</a>
                    <a href="#topic14">Yin Yoga Course</a>
                    <a href="#topic15">Prenatal Yoga Course</a>
                </div>

                <div class="right-column col-md-8">
                    <h2 id="topic1">100 Hours Yoga Teacher Training Course</h2>
                    <p>The 100 Hours Yoga Teacher Training Course in Rishikesh is designed to deepen the scope of
                        practice and knowledge. The foundational principles of yoga are tantamount to asanas, meditation
                        techniques, and philosophy all wrapped in the serene backdrop of Himalayas. This course is
                        excellent for beginners and aspiring teachers to grow personally and be mindful, getting a
                        well-balanced deep foundation for further training or personal practice.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 10 Days - 14 Days</p>
                    <p>Yoga Style: Multistyle (Hatha, Ashtanga, Vinyasa and Iyengar)</p>
                    <p>Price:$499-$1299</p>
                    <p> Join us and transform your journey of yoga!</p>
                    <p><b>Note* Price depends on location and accommodation types.</b></p>


                    <h2 id="topic2">200 Hours Yoga Teacher Training Course</h2>
                    <p>The 200 Hours Yoga Teacher Training Course is an advanced program of Rishikesh, for the serious
                        practitioner of yoga and future teacher. It will engage the participant in yoga styles from
                        Hatha, Ashtanga, to Vinyasa, along with anatomy, philosophy, and methods of teaching. Explore
                        the depths of practice amidst the Himalayas, enhance your teaching skills, and live mindfully
                        with a warm heart. </p>
                    <p>Certification: 200 Hours Yoga Alliance</p>
                    <p>Duration: 21 Days - 28 Days</p>
                    <p>Yoga Style: Multistyle (Hatha, Ashtanga, Vinyasa and Iyengar)</p>
                    <p>Price:$699-$2199</p>

                    <p>Become a part of us and embark on this journey that transforms you to a certified yoga
                        instructor!</p>
                        <p><b>Note* Price depends on location and accommodation types.</b></p>

                    <h2 id="topic3">300 Hours Yoga Teacher Training Course</h2>
                    <p>The 300 Hours Yoga Teacher Training is more advanced and designed for certified teachers who want
                        to go deep into the knowledge and practice. A variety of styles are covered during the training
                        - including Hatha, Ashtanga, and Vinyasa technique, but this forms the backdrop against more
                        complex asanas, anatomy, and yoga philosophy. Refine your teaching skills, discover personal
                        growth, and increase your knowledge about yoga as you find yourself amidst serene Himalayan
                        landscapes.</p>
                    <p>Certification: 300 Hours Yoga Alliance</p>
                    <p>Duration: 28 Days - 45 Days</p>
                    <p>Yoga Style: Multistyle (Hatha, Ashtanga, Vinyasa and Iyengar)</p>
                    <p>Price:$899-$2899</p>

                    <p> Join us on the platform to raise your teaching journey and transform lives! </p>
                    <p><b>Note* Price depends on location and accommodation types.</b></p>


                    <h2 id="topic4">500 Hours Yoga Teacher Training Course</h2>
                    <p>The 500 Hours Yoga Teacher Training Course is spread and intensive in Rishikesh, which helps the
                        students explore yoga broadly. This course covers advanced Hatha, Ashtanga, Vinyasa techniques,
                        yoga philosophy, anatomy, and teaching methodologies. Spanning across the serene Himalayas,
                        participants will broaden their practice, refine teaching skills, and experience personal
                        transformation.</p>
                    <p>Certification: 500 Hours Yoga Alliance</p>
                    <p>Duration: 55 Days - 75 Days</p>
                    <p>Yoga Style: Multistyle (Hatha, Ashtanga, Vinyasa and Iyengar)</p>
                    <p>Price:$2199-$3999</p>

                    <p> Join us on the platform to raise your teaching journey and transform lives! </p>
                    <p><b>Note* Price depends on location and accommodation types.</b></p>


                    <h2 id="topic5">3 Days Yoga Retreat Program</h2>
                    <p>Get a chance to unwind within the serene environs of Rishikesh by participating in our 3-day yoga
                        retreat. Equipped with daily yoga practice, meditation, pranayama, and some relaxing techniques
                        to regain equipoise and peace within, it's an ideal retreat that can help you break up from
                        routine and get back in touch with nature and yourself, refreshed and revitalized.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days</p>
                    <p>Yoga Style: Multistyle (Hatha, Ashtanga, Vinyasa and Iyengar)</p>
                    <p>Price:$149-$449</p>

                    <p> Join us and transform your journey of yoga!</p>
                    <p><b>Note* Price depends on location and accommodation types.</b></p>


                    <h2 id="topic6">5 Days Yoga Retreat Program</h2>
                    <p>Get fully immersed in the serene 5-Day Yoga Retreat in Rishikesh, gazing at the carefully planned
                        spiritual activities. The retreat is designed to be spent by incorporating regular yoga,
                        meditation, pranayama, and mindfulness practices, mainly working on relaxation, rejuvenation,
                        and deepening the connection with self - an ideal opportunity for all, from beginners to
                        experienced practitioners, to help regain balance in harmony within a serene natural
                        environment.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 5 Days</p>
                    <p>Yoga Style: Multistyle (Hatha, Ashtanga, Vinyasa and Iyengar)</p>
                    <p>Price:$179-$549</p>

                    <p>Become a part of us and embark on this journey that transforms you to a certified yoga
                        instructor!</p>
                        <p><b>Note* Price depends on location and accommodation types.</b></p>


                    <h2 id="topic7">7 Days Yoga Retreat Program</h2>
                    <p>It's an experience to spend 7 days at a Yoga Retreat amidst the serene setting of Rishikesh. The
                        venue of the retreat covers the venue for every day's yoga, meditation, and practice of
                        pranayama.. Such a retreat is conducted to help seekers of holistic well-being discover inner
                        peace. Whether you go here to attain much-needed relaxation or to really grow inwardly, this
                        potent experience will renew your connection with yourself, your mind, your body, and your
                        spirit.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 7 Days</p>
                    <p>Yoga Style: Multistyle (Hatha, Ashtanga, Vinyasa and Iyengar)</p>
                    <p>Price:$199-$699</p>

                    <p> Join us on the platform to raise your teaching journey and transform lives! </p>
                    <p><b>Note* Price depends on location and accommodation types.</b></p>


                    <h2 id="topic8">10 Days Yoga Retreat Program</h2>
                    <p>Intense self-enquiry and introspection in a 10-Day Yoga Retreat in Rishikesh can be contemplated
                        here. The long retreat will perfectly harmonise yoga, meditation, pranayama, and mindfulness
                        practices for unwinding and rejuvenation so as to bring a deeper connection between the body and
                        soul. Recommended for all those seeking transformative experiences in beautiful natural
                        surroundings.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 10 Days</p>
                    <p>Yoga Style: Multistyle (Hatha, Ashtanga, Vinyasa and Iyengar)</p>
                    <p>Price:$249-$899</p>

                    <p> Join us on the platform to raise your teaching journey and transform lives! </p>
                    <p><b>Note* Price depends on location and accommodation types.</b></p>


                    <h2 id="topic9">14 Days Yoga Retreat Program</h2>
                    <p>Experience a transformational 14-day yoga retreat with serenity in and around Rishikesh. This
                        retreat has been designed with great care to rejuvenate yoga, meditation, pranayama, and
                        mindfulness to deeply unwind and to empower the realization of true self-reflection and growth.
                        Recommended for one who wants to rejuvenate fully and transform his or her mind, body, and
                        spirit to an extreme limit.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 14 Days</p>
                    <p>Yoga Style: Multistyle (Hatha, Ashtanga, Vinyasa and Iyengar)</p>
                    <p>Price:$349-$1099</p>

                    <p> Join us and transform your journey of yoga!</p>
                    <p><b>Note* Price depends on location and accommodation types.</b></p>


                    <h2 id="topic10">200 Hours Kundalini Yoga Course</h2>
                    <p>Our 200-Hour Kundalini Yoga Teacher Training in Rishikesh, our journey is, no doubt, a
                        transformative exploration of the ancient Kundalini Yoga: it encompasses kriyas, pranayama,
                        meditation, and chanting, and it will definitely elevate your consciousness and enhance your
                        teaching skills with him. This course is perfect for those looking to learn more about spiritual
                        growth and personal transformation through the powerful peaceful Himalayas.</p>
                    <p>Certification: 200 Hours Yoga Alliance</p>
                    <p>Duration: 21 Days - 28 Days</p>
                    <p>Yoga Style: Kundalini, Pranayama and Meditation</p>
                    <p>Become a part of us and embark on this journey that transforms you to a certified yoga
                        instructor!</p>
                        <p><b>Note* Price depends on location and accommodation types.</b></p>


                    <h2 id="topic11">Sound Healing Yoga Course</h2>
                    <p>Experience the alchemy of sound and yoga in this Sound Healing Yoga Course, where traditional
                        yoga practices merge with sound therapies, which make use of singing bowls, gongs, and tuning
                        forks to create an atmosphere of relaxation and healing. Tour to explore the healing benefits of
                        vibrations from the sound, aiming at enhancing mindfulness, and plunge into a deeper practice of
                        yoga.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days - 14 Days</p>
                    <p>Yoga Style: Sound Healing Therapy</p>
                    <p> Join us on the platform to raise your teaching journey and transform lives! </p>
                    <p><b>Note* Price depends on location and accommodation types.</b></p>


                    <h2 id="topic12">Ayurveda Yoga Course</h2>
                    <p>This course of Ayurveda Yoga, presented at the Rishikesh session, will give participants an
                        integrated approach toward holistic yoga merged with the principles of Ayurveda to achieve
                        better health and wellness. Yoga practices, meditation, pranayama, diet, and lifestyle teaching
                        in Ayurveda and natural healing are part of this program. This serene environment works and is
                        perfect for balancing the mind, body, and spirit with these ancient systems of wellness.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days - 14 Days</p>
                    <p>Yoga Style: Ayurvedic Yoga </p>
                    <p> Join us on the platform to raise your teaching journey and transform lives! </p>
                    <p><b>Note* Price depends on location and accommodation types.</b></p>


                    <h2 id="topic13">Aerial Yoga Course</h2>
                    <p>The combination of Rishikesh and traditional yoga with aerial arts through a hammock, Aerial Yoga
                        Course is a program that will be really deepened with your practice, strengthening yourself
                        while allowing ease in some inversions and stretches.
                        Perfect for those looking to elevate their yoga experience, it promotes physical fitness and
                        mental relaxation in a fun, dynamic way.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days - 14 Days</p>
                    <p>Yoga Style: Aerial Yoga</p>
                    <p> Join us on the platform to raise your teaching journey and transform lives! </p>
                    <p><b>Note* Price depends on location and accommodation types.</b></p>


                    <h2 id="topic14">Yin Yoga Course</h2>
                    <p>The Yin Yoga Course in Rishikesh will slowly and gently take you to stretches to deeper
                        connective tissues of your body for achieving flexibility, relaxation, and peaceful mind. Some
                        long-held postures, breathing techniques, and meditation unlock the tension in the joints and in
                        the body. It's great for those people seeking not an aggressive but a deeply progressive yoga
                        experience that brings one the balance and harmony both in the body and the mind.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days - 14 Days</p>
                    <p>Yoga Style: Yin Yoga </p>
                    <p> Join us on the platform to raise your teaching journey and transform lives! </p>
                    <p><b>Note* Price depends on location and accommodation types.</b></p>


                    <h2 id="topic15">Prenatal Yoga Course</h2>
                    <p>The prenatal yoga course at Rishikesh is only designed for pregnant women to cater to their body
                        and mind during pregnancy. The course primarily consists of soft postures of yoga, breathing,
                        and relaxation processes that support the healthy level of pregnancy, reduce stress levels, and
                        prepare women for delivery. Activation of fitness also takes place with careful awareness as one
                        prepares to give birth.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days - 14 Days</p>
                    <p>Yoga Style: Prenatal Yoga</p>
                    <p> Join us on the platform to raise your teaching journey and transform lives! </p>

                    <p><b>Note* Price depends on location and accommodation types.</b></p>

                </div>
            </div>
        </div>

        <!-- Content for Course 2 -->
        <div id="content2" class="content mt-4">
            <div class="course-layout">
                <div class="left-column col-md-4">
                    <a href="#topic16">100 Hours Yoga Teacher Training Course</a>
                    <a href="#topic17">200 Hours Yoga Teacher Training Course</a>
                    <a href="#topic18">Ayurveda Yoga Course</a>
                    <a href="#topic19">Yin Yoga Course</a>
                    <a href="#topic20">Prenatal Yoga Course</a>
                </div>

                <div class="right-column col-md-8">
                    <h2 id="topic16">100 Hours Online Yoga Teacher Training Course</h2>
                    <p>Join us in our 100 hours online yoga teacher training course offered by Rishikesh Yoga Alliance
                        for deepened practice from the comfort of home. It covers the following: All the essential yoga
                        philosophy Asanas Meditation techniques Teaching methodologies It is ideal for beginners and
                        aspiring teachers to create a strong foundation in your journey of yoga and share it with
                        others. </p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 10 Days - 14 Days</p>
                    <p>Yoga Style: Multistyle (Hatha, Ashtanga, Vinyasa and Iyengar)</p>
                    <p>Price:$199-$449</p>

                    <p class='text-center'>Transform your life and take it to the next level. We'll enhance your
                        teaching skills!</p>
                        <p><b>Note* Price depends on location and accommodation types.</b></p>



                    <h2 id="topic17">200 Hours Online Yoga Teacher Training Course</h2>
                    <p>Learn with Rishikesh Yoga Alliance in the 200 Hours Online Yoga Teacher Training Course, perfect
                        for aspiring yoga teachers as well as practicing enthusiasts. This full-spectrum course comes at
                        an endowments fee and will equip you with not only theoretical knowledge of practicing all forms
                        of yoga styles, including Hatha and Vinyasa, but also a great deal of learning in anatomy,
                        philosophy, and techniques applied when teaching. You can, therefore, rest assured to be guided
                        by dedicated teachers to allow you proper grounds for practicing yoga with confidence and
                        effectiveness.</p>
                    <p>Certification: 200 Hours Yoga Alliance</p>
                    <p>Duration: 21 Days - 28 Days</p>
                    <p>Yoga Style: Multistyle (Hatha, Ashtanga, Vinyasa and Iyengar)</p>
                    <p>Price:$299-$599</p>

                    <p>Join us in taking your practice from home to the next level!</p>
                    <p><b>Note* Price depends on location and accommodation types.</b></p>


                    <h2 id="topic18">Ayurveda Online Yoga Course</h2>
                    <p>Discover the perfect coming together of yoga and Ayurveda at Rishikesh Yoga Alliance through this
                        Ayurveda Online Yoga Course. It takes you through principles of Ayurveda in terms of dietary
                        guidelines and lifestyle practices along with yoga techniques for balance and wellness. It is
                        open to all levels, helping you gain far greater health and understanding of holistic living and
                        a mindful lifestyle from the comfort of your home.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days - 14 Days</p>
                    <p>Yoga Style: Ayurvedic Yoga </p>
                    <p>So sign up, level up your wellness journey!</p>
                    <p><b>Note* Price depends on location and accommodation types.</b></p>


                    <h2 id="topic19">Yin Online Yoga Course</h2>
                    <p>Get absorbed into the soothing practice of Yin Yoga with our Yin Online Yoga Course at Rishikesh
                        Yoga Alliance. Slow-moving, deep stretches into long-held postures with release and relaxation,
                        flexibility and mindfulness-all on all levels. Learn how to release deep-held tensions, improve
                        joint mobility, and find inner peace while you take your practice home with you.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days - 14 Days</p>
                    <p>Yoga Style: Yin Yoga </p>
                    <p>Join us in taking your practice from home to the next level!</p>
                    <p><b>Note* Price depends on location and accommodation types.</b></p>


                    <h2 id="topic20">Prenatal Online Yoga Course</h2>
                    <p>Nourish your body and mind with our prenatal online course in the stills of Rishikesh Yoga
                        Alliance, especially designed by special gentle yoga postures, breathing techniques, and
                        relaxation methods especially to support expectant mothers. Your journey here, in this authentic
                        online course, will teach you how to maintain physical wellness, reduce stress, and prepare for
                        childbirth within a completely safe and nurturing space.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days - 14 Days</p>
                    <p>Yoga Style: Prenatal Yoga</p>
                    <p>Connect with us as we join in embracing this holistic journey and reach your baby comfortably
                        from your own home!</p>

                        <p><b>Note* Price depends on location and accommodation types.</b></p>



                </div>
            </div>
        </div>

        <!-- Content for Course 3 -->
        <div id="content3" class="content mt-4">
            <div class="course-layout">
                <div class="left-column col-md-4">
                    <a href="#topic27">Weekend Yoga Course</a>
                    <a href="#topic28">3 Days Yoga Intensive</a>
                </div>

                <div class="right-column col-md-8">
                    <h2 id="topic27">Weekend Yoga Course</h2>
                    <h5>Yoga Hiking
                    </h5>
                    <p>The Yoga Hiking Program is an exclusive 3-day experience where yoga meets nature. Students of yogic traditions Hatha, Ashtanga, Vinyasa, and Iyengar can explore scenic trails while pursuing these rejuvenation programs. All the rejuvenation programs take a holistic approach to physical and mental well-being, and conclude with a Participation Certificate from Rishikesh Yoga Schools.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days</p>
                    <p>Yoga Style: Multistyle (Hatha, Ashtanga, Vinyasa and Iyengar)</p>
                    <p class='text-center'>Transform your life and take it to the next level. We'll enhance your
                        teaching skills!</p>
                        <p>Price:$299-$999</p>
                        <p><b>Note* Price depends on location and accommodation types.</b></p>


                    <h5>Meditation Retreat</h5>
                    <p>Join our Meditation Retreat, located in the serene surroundings of Rishikesh for all students. Over many days, get absorbed into guided meditation sessions, mindfulness and self-reflection activities that deepen your association with inner peace. This transformative retreat comes with a supportive environment in which you can cultivate mindfulness and tranquility and, subsequently, be rewarded with a Participation Certificate to honor your journey.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days</p>
                    <p>Yoga Style: Multistyle (Hatha, Ashtanga, Vinyasa and Iyengar)</p>
                    <p class='text-center'>Transform your life and take it to the next level. We'll enhance your
                        teaching skills!</p>
                    <p>Price:$299-$999</p>
                    <p><b>Note* Price depends on location and accommodation types.</b></p>



                    <h5>Spritual Tour</h5>
                    <p>Experience a transformational Spiritual Tour in Rishikesh, where tradition meets modern spirituality. The intense experience takes the student to the sacred sites, ashrams, and temples, deepening the connection with the traditions and mainstream historical practices in the area. Engage in enlightening discussions and rituals that allow you to understand yoga and spirituality better. This tour is an enriching one that promotes self-discovery and growth.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days</p>
                    <p>Yoga Style: Multistyle (Hatha, Ashtanga, Vinyasa and Iyengar)</p>
                    <p class='text-center'>Transform your life and take it to the next level. We'll enhance your
                        teaching skills!</p>

                    <p>Price:$199-$499</p>
                    <p><b>Note* Price depends on location and accommodation types.</b></p>



                    <h5>Kriya Yoga</h5>
                    <p>Kriya Yoga is a stronger spiritual practice that integrates specific techniques in meditation, breathing, and energy control. It traces its root from ancient traditions and purifies the mind as well as the body to realize oneself and bring peaceful conditions at the end. Through disciplined practice, students from various Rishikesh yoga schools will be able to deepen their connection with their true selves, furthering their entire wellbeing.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days</p>
                    <p>Yoga Style: Multistyle (Kriya Yoga)</p>
                    <p class='text-center'>Transform your life and take it to the next level. We'll enhance your
                        teaching skills!</p>

                    <p>Price:$299-$999</p>
                    <p><b>Note* Price depends on location and accommodation types.</b></p>



                    <h5>Karma Yoga </h5>
                    <p>Karmeeyoga or simply Karma Yoga refers to the path of selfless actions and service, underlining the importance of doing work without attachment to fruits. This practice teaches students from Rishikesh yoga schools to cultivate a sense of purpose and fulfillment through their actions. By embracing Karma Yoga, practitioners develop compassion, reduce ego, and create a harmonious balance in life, fostering personal and collective growth.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days</p>
                    <p>Yoga Style: Multistyle (Karma Yoga)</p>
                    <p class='text-center'>Transform your life and take it to the next level. We'll enhance your
                        teaching skills!</p>


                    <p>Price:$299-$999</p>
                    <p><b>Note* Price depends on location and accommodation types.</b></p>


                    <h5>Seva</h5>
                    <p>Seva is selfless service, and it forms the base of yoga practice. It inspires and motivates individuals to show sympathy and sympathy towards society. For those students learning in Rishikesh yoga schools, service through acts of kindness and generosity proves to be a vital practice that connects them with a sense of purpose and meaning. Practices of selflessness help the practitioner not just transcend the self but promote spiritual growth and development towards healthy well-being for oneself and others with good moral character.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days</p>
                    <p>Yoga Style: Multistyle (Hatha, Ashtanga, Vinyasa and Iyengar)</p>
                    <p class='text-center'>Transform your life and take it to the next level. We'll enhance your
                        teaching skills!</p>
                        <p>Price:$299-$999</p>
                    <p><b>Note* Price depends on location and accommodation types.</b></p>


                    <h2 id="topic28">3 Days Yoga Intensive</h2>
                    <h5>Yoga Retreat</h5>
                    <p>Rejuvenate at the 3-Day Yoga Retreat in Rishikesh specifically tailored for students and students of heart. Hatha, Vinyasa, and Meditation walks under the sky, with the most nourishing meals to bring back the vitality and nourishment to the life and mind, body, and soul. Learn together in such an encouraging environment how to deepen your practice, connect with fellow yogis, and evolve into inner peace.. Come, welcome this journey of transformation, and enrich your yoga experience.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days</p>
                    <p>Price:$149-$499</p>
                    <p><b>Note* Program package includes accommodation and healthy meals, with prices varying based on location and accommodation type.</b></p>
                    <p class='text-center'>Transform your life and take it to the next level. We'll enhance your teaching skills!</p>


                    <h5>Hatha Program</h5>
                    <p>Join our 3 Day Hatha Yoga Course for students in Rishikesh. Daily hatha sessions focus on alignment, breath control, and meditation to nurture the health of body and mind. This programme is a way through which students get relaxation and develop greater mindfulness, allowing a reconnection with the inner self and making a way for the changing power of yoga in a clean and supportive climate.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days</p>
                    <p>Price:$149-$499</p>
                    <p><b>Note* Program package includes accommodation and healthy meals, with prices varying based on location and accommodation type.</b></p>
                    <p class='text-center'>Transform your life and take it to the next level. We'll enhance your teaching skills!</p>


                    <h5>Iyengar Program</h5>
                    <p>Experience our 3-Day Iyengar Yoga Program in Rishikesh, tailored for students aiming to enhance their practice. Focus on precise alignment and the use of props to support individual needs, ensuring safe and effective poses. This program will emphasize controlling the breath and mindfulness so that students grow a greater sense of the yoga principles. Come join us to gain strength, flexibility, and inner peace in a warm and loving environment.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days</p>
                    <p>Price:$149-$499</p>
                    <p><b>Note* Program package includes accommodation and healthy meals, with prices varying based on location and accommodation type.</b></p>
                    <p class='text-center'>Transform your life and take it to the next level. We'll enhance your teaching skills!</p>



                    <h5>Alignment and Adjustment Program</h5>
                    <p>Join us on the Alignment and Adjustment program at Rishikesh for deepening practice in yoga as a student. Emphasis is here given to proper alignment in asanas as well as teaching of methods of adjustments practiced with safety. Learn about body mechanics and move through flexibility enhancement and prevent injuries. You will get personally guided in a very supportive environment so you can deepen your practice with more confidence.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days</p>
                    <p>Price:$149-$499</p>
                    <p><b>Note* Program package includes accommodation and healthy meals, with prices varying based on location and accommodation type.</b></p>
                    <p class='text-center'>Transform your life and take it to the next level. We'll enhance your teaching skills!</p>



                    <h5>Sound Healing Program</h5>
                    <p>Immerse yourself in the Sound Healing Program of Rishikesh, ideal to awaken students' interest in the therapeutic healing of sound. This program brings relaxation with the Tibetan singing bowls, gongs, and chanting. It involves a very relaxing time where stress is eliminated, and a heightened mindset of conscious mindfulness is achieved. Ride through deep inner peace and emotional release by being healed of the vibrations, and be part of a holistic approach towards being well.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days</p>
                    <p>Price:$149-$499</p>
                    <p><b>Note* Program package includes accommodation and healthy meals, with prices varying based on location and accommodation type.</b></p>
                    <p class='text-center'>Transform your life and take it to the next level. We'll enhance your teaching skills!</p>


                    <h5>Ayurveda Program</h5>
                    <p>Learn ancient wisdoms in Ayurveda through the complete course in Rishikesh for college students. This learning is basically about the elementary principles of healing brought about by Ayurvedic approaches on diet, lifestyle, and herbal remedies that take into consideration the distinct needs of every individual. Discover how to align energy in the body with perfect health and wellbeing. Bring together Ayurveda with your yogic journey, which will endow your body wellness with an overall sense of spiritual wellbeing.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days</p>
                    <p>Price:$149-$499</p>
                    <p><b>Note* Program package includes accommodation and healthy meals, with prices varying based on location and accommodation type.</b></p>
                    <p class='text-center'>Transform your life and take it to the next level. We'll enhance your teaching skills!</p>

                    <h5>Kundalini Yoga Program</h5>
                    <p>Kundalini Yoga Program to be joined in Rishikesh. The course is very carefully designed for those students who can provoke their inner energy through the power of dynamic asanas, breathwork, meditation, and chanting that may awaken the dormant Kundalini energy sitting at the base of the spine. During this process, you will experience a transformative experience for personal growth in awareness and healing of emotions by learning to understand self-discovery with spiritual awakening in the cause of existence.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days</p>
                    <p>Price:$149-$499</p>
                    <p><b>Note* Program package includes accommodation and healthy meals, with prices varying based on location and accommodation type.</b></p>
                    <p class='text-center'>Transform your life and take it to the next level. We'll enhance your teaching skills!</p>



                    <h5>Chakra Meditation Program</h5>
                    <p>Experience the trans-formative Chakra Meditation Program, specializing in balancing and centering of one's energy centres. This exciting program will be based on guided meditations with breathing techniques and visualization for all chakras. Take this as an opportunity to improve one's self-awareness, healing from emotional issues, and spiritual growth by learning one's way in harnessing the power of one's energy system. Join us for this journey to inner harmony and wellness.</p>
                    <p>Certification: Participation Certificate by the Yoga School</p>
                    <p>Duration: 3 Days</p>
                    <p>Price:$149-$499</p>
                    <p><b>Note* Program package includes accommodation and healthy meals, with prices varying based on location and accommodation type.</b></p>
                    <p class='text-center'>Transform your life and take it to the next level. We'll enhance your teaching skills!</p>


        
                </div>

            </div>
        </div>

    </section>


    <script>
    function showContent(courseNumber) {
        // Hide all content sections initially
        document.getElementById('content1').classList.remove('active-content');
        document.getElementById('content2').classList.remove('active-content');
        document.getElementById('content3').classList.remove('active-content');

        // Remove 'active' class from all buttons
        document.getElementById('btn1').classList.remove('active');
        document.getElementById('btn2').classList.remove('active');
        document.getElementById('btn3').classList.remove('active');

        // Show the selected content and add active class to the corresponding button
        if (courseNumber === 1) {
            document.getElementById('content1').classList.add('active-content');
            document.getElementById('btn1').classList.add('active');
        } else if (courseNumber === 2) {
            document.getElementById('content2').classList.add('active-content');
            document.getElementById('btn2').classList.add('active');
        } else if (courseNumber === 3) {
            document.getElementById('content3').classList.add('active-content');
            document.getElementById('btn3').classList.add('active');
        }
    }
    </script>
        <?php include('scroll_top.php'); ?>

    <?php include('footer.php'); ?>

</body>

</html>