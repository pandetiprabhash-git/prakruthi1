<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles/header.css">
    <link rel="stylesheet" href="assets/styles/services.css">
    
</head>
<body>
    <?php include 'assets/components/header.php'; ?>
 <!-- ============ SERVICES GRID ============ -->
<section class="section" style="padding-top:30px;">
    <div class="container">
        <div class="reveal" style="text-align:center; display:flex; flex-direction:column; align-items:center;">
            <span class="eyebrow">What We Offer</span>
            <h2 class="section-heading">Premium Services, Included For Every Resident</h2>
            <p class="section-sub" style="text-align:center;">
                Whether you're staying in our boys' or girls' wing, every resident gets the full standard below.
            </p>
        </div>
        <div class="services-grid reveal-stagger">
            <!-- ================= Accommodation ================= -->
            <div class="service-card">
                <div class="service-card__icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    </svg>
                </div>
                <h3>Accommodation</h3>
                <p>
                    AC and Non-AC rooms with comfortable beds, storage, and good natural light.
                </p>
                <div class="more-content">
                    <h4>Room Types</h4>
                    <ol>
                        <li>AC Room</li>
                        <li>Non-AC Room</li>
                    </ol>
                    <h4>AC Room Benefits</h4>
                    <ul>
                        <li>Air Conditioner</li>
                        <li>Comfortable Cot & Mattress</li>
                        <li>Study Table & Chair</li>
                        <li>Personal Wardrobe</li>
                        <li>High-Speed Wi-Fi</li>
                        <li>Power Backup</li>
                        <li>Daily Housekeeping</li>
                        <li>RO Drinking Water</li>
                    </ul>
                    <h4>Non-AC Room Benefits</h4>
                    <ul>
                        <li>Affordable Price</li>
                        <li>Natural Ventilation</li>
                        <li>Comfortable Bed</li>
                        <li>Study Table</li>
                        <li>High-Speed Wi-Fi</li>
                        <li>Daily Cleaning</li>
                        <li>24×7 Security</li>
                        <li>CCTV Surveillance</li>
                    </ul>
                </div>
               
            </div>
            <!-- ================= Healthy Food ================= -->
            <div class="service-card">

                <div class="service-card__icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 11h18l-2 9H5l-2-9z"/>
                        <path d="M3 11l1.5-6h15L21 11"/>
                    </svg>
                </div>

                <h3>Healthy Food</h3>

                <p>
                    Home-style vegetarian meals planned for nutrition and taste, served fresh daily.
                </p>

                <div class="more-content">

                    <h4>Daily Meal Schedule</h4>

                    <ol>
                        <li>Healthy Breakfast (7:00 AM – 9:00 AM)</li>
                        <li>Nutritious Lunch (12:30 PM – 2:00 PM)</li>
                        <li>Evening Snacks & Tea (4:30 PM – 5:30 PM)</li>
                        <li>Fresh Dinner (7:30 PM – 9:00 PM)</li>
                    </ol>

                    <h4>Food Facilities</h4>

                    <ul>
                        <li>Freshly prepared vegetarian meals every day</li>
                        <li>Balanced menu with rice, chapati, dal, curry, and vegetables</li>
                        <li>Seasonal fruits served on selected days</li>
                        <li>Milk or curd included regularly</li>
                        <li>Hygienic kitchen with purified RO water</li>
                        <li>Quality ingredients and edible cooking oil</li>
                        <li>Clean and spacious dining hall</li>
                        <li>Special festival meals on important occasions</li>
                    </ul>

                    <h4>Health Benefits</h4>

                    <ul>
                        <li>Rich in proteins, vitamins, and minerals</li>
                        <li>Boosts energy for study and work</li>
                        <li>Supports healthy digestion</li>
                        <li>Freshly cooked food with minimal oil</li>
                        <li>Helps maintain a balanced lifestyle</li>
                        <li>Prepared under hygienic conditions</li>
                    </ul>

                </div>

                <!-- <button class="view-more-btn">
                    View More
                </button> -->

            </div>

            <!-- ================= High-Speed Wi-Fi ================= -->

            <div class="service-card">

                <div class="service-card__icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12.55a11 11 0 0 1 14.08 0M1.42 9a16 16 0 0 1 21.16 0M8.53 16.11a6 6 0 0 1 6.95 0M12 20h.01"/>
                    </svg>
                </div>

                <h3>High-Speed Wi-Fi</h3>

                <p>
                    Reliable internet across the hostel for online classes, research, entertainment, and daily communication.
                </p>

                <div class="more-content">

                    <h4>📶 Wi-Fi Features</h4>

                    <ul class="wifi-list">
                        <li>High-speed broadband internet connection</li>
                        <li>24×7 uninterrupted Wi-Fi access</li>
                        <li>Coverage in all rooms and common areas</li>
                        <li>Supports online classes and office work</li>
                        <li>Multiple devices can connect simultaneously</li>
                    </ul>

                    <h4>💻 Best For</h4>

                    <ol class="wifi-steps">
                        <li>Online Classes & Learning</li>
                        <li>Office Work & Video Meetings</li>
                        <li>Coding & Software Development</li>
                        <li>Streaming Movies & Music</li>
                        <li>Gaming & Entertainment</li>
                    </ol>

                    <h4>⭐ Benefits</h4>

                    <ul class="wifi-list">
                        <li>Fast and stable internet speed</li>
                        <li>Secure network connection</li>
                        <li>No additional installation charges</li>
                        <li>Available throughout the hostel</li>
                        <li>Ideal for students and professionals</li>
                    </ul>

                </div>

                <!-- <button class="view-more-btn">
                    View More
                </button> -->

            </div>

            <!-- ================= Laundry ================= -->

            <div class="service-card">

                <div class="service-card__icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82A1.65 1.65 0 0 0 3 13H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9A1.65 1.65 0 0 0 21 10h0a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                    </svg>
                </div>

                <h3>Laundry Service</h3>

                <p>
                    Scheduled laundry service so residents always have clean clothes ready.
                </p>

                <div class="more-content">

                    <h4>🧺 Laundry Facilities</h4>

                    <ul class="laundry-list">
                        <li>Weekly scheduled laundry service</li>
                        <li>Professional washing and drying</li>
                        <li>Separate washing for light and dark clothes</li>
                        <li>Clean folding after washing</li>
                        <li>Fresh and hygienic clothing every time</li>
                    </ul>

                    <h4>📅 Service Schedule</h4>

                    <ol class="laundry-steps">
                        <li>Collect clothes from residents</li>
                        <li>Wash using quality detergent</li>
                        <li>Dry and neatly fold clothes</li>
                        <li>Return clothes on the scheduled day</li>
                    </ol>

                    <h4>✨ Benefits</h4>

                    <ul class="laundry-list">
                        <li>Saves time and effort</li>
                        <li>Maintains hygiene and cleanliness</li>
                        <li>Affordable and convenient service</li>
                        <li>Suitable for students and professionals</li>
                        <li>Regular and reliable laundry support</li>
                    </ul>

                </div>

                <!-- <button class="view-more-btn">
                    View More
                </button> -->

            </div>

            <!-- ================= Housekeeping ================= -->

<div class="service-card">

    <div class="service-card__icon">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 6h18M3 12h18M3 18h18"/>
        </svg>
    </div>

    <h3>Housekeeping</h3>

    <p>
        Daily cleaning of rooms, bathrooms, and common areas by trained housekeeping staff.
    </p>

    <div class="more-content">

        <h4>🧹 Housekeeping Services</h4>

        <ul class="housekeeping-list">
            <li>Daily room cleaning and dust removal</li>
            <li>Regular bathroom cleaning and sanitization</li>
            <li>Common area cleaning and maintenance</li>
            <li>Daily waste collection and disposal</li>
            <li>Floor mopping and corridor cleaning</li>
        </ul>

        <h4>📅 Cleaning Schedule</h4>

        <ol class="housekeeping-steps">
            <li>Morning room inspection</li>
            <li>Cleaning of rooms and bathrooms</li>
            <li>Waste collection and disposal</li>
            <li>Common area maintenance</li>
            <li>Final hygiene inspection</li>
        </ol>

        <h4>✨ Benefits</h4>

        <ul class="housekeeping-list">
            <li>Clean and hygienic living environment</li>
            <li>Reduces dust, germs, and allergens</li>
            <li>Comfortable and pleasant atmosphere</li>
            <li>Professional housekeeping staff</li>
            <li>Improves resident health and well-being</li>
        </ul>

    </div>

    <!-- <button class="view-more-btn">
        View More
    </button> -->

</div>

<!-- ================= Power Backup ================= -->

<div class="service-card">

    <div class="service-card__icon">
        <svg width="26"
             height="26"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="2">
            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
        </svg>
    </div>

    <h3>Power Backup</h3>

    <p>
        Backup power ensures lights, fans, Wi-Fi, and essential facilities remain operational during power outages.
    </p>

    <div class="more-content">

        <h4>⚡ Power Backup Features</h4>

        <ul class="power-list">
            <li>24×7 uninterrupted power backup</li>
            <li>Generator support during outages</li>
            <li>Power for lights and ceiling fans</li>
            <li>Continuous Wi-Fi connectivity</li>
            <li>Emergency lighting in common areas</li>
            <li>Reliable power supply for study rooms</li>
        </ul>

        <h4>🔋 Power Backup Coverage</h4>

        <ol class="power-steps">
            <li>Resident Rooms</li>
            <li>Reading Hall</li>
            <li>Dining Area</li>
            <li>Reception & Office</li>
            <li>Corridors and Staircases</li>
            <li>Common Utility Areas</li>
        </ol>

        <h4>✨ Benefits</h4>

        <ul class="power-list">
            <li>Comfort during unexpected power cuts</li>
            <li>Uninterrupted online classes and office work</li>
            <li>Safe movement with emergency lighting</li>
            <li>Reliable operation of hostel facilities</li>
            <li>Peace of mind for residents</li>
        </ul>

    </div>

    <!-- <button class="view-more-btn">
        View More <span>▼</span>
    </button> -->

</div>

<!-- ================= RO Drinking Water ================= -->

<div class="service-card">

    <div class="service-card__icon">
        <svg width="26"
             height="26"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="2">
            <path d="M12 2l3 7h7l-5.5 4.5L18 21l-6-4-6 4 1.5-7.5L2 9h7z"/>
        </svg>
    </div>

    <h3>RO Drinking Water</h3>

    <p>
        Purified RO drinking water is available 24×7 to ensure safe, clean, and healthy hydration for every resident.
    </p>

    <div class="more-content">

        <h4>💧 RO Water Facilities</h4>

        <ul class="water-list">
            <li>24×7 purified RO drinking water</li>
            <li>Multi-stage RO filtration system</li>
            <li>Safe and hygienic drinking water</li>
            <li>Regular filter maintenance</li>
            <li>Water available on every floor</li>
            <li>Free unlimited drinking water</li>
        </ul>

        <h4>🔄 Purification Process</h4>

        <ol class="water-steps">
            <li>Sediment filtration</li>
            <li>Activated carbon filtration</li>
            <li>Reverse Osmosis (RO) purification</li>
            <li>UV sterilization</li>
            <li>Safe storage and distribution</li>
        </ol>

        <h4>🌿 Benefits</h4>

        <ul class="water-list">
            <li>Removes harmful impurities and bacteria</li>
            <li>Improves taste and water quality</li>
            <li>Safe for daily drinking and cooking</li>
            <li>Supports better health and hydration</li>
            <li>Reliable supply throughout the day</li>
        </ul>

    </div>

    <!-- <button class="view-more-btn">
        View More
    </button> -->

</div>

<!-- ==================== 24×7 SECURITY ==================== -->
<div class="service-card">

    <div class="service-card__icon">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 2l9 4.5v9L12 22l-9-6.5v-9z"/>
        </svg>
    </div>

    <h3>24×7 Security</h3>

    <p>
        On-site security and controlled entry ensure the safety of every resident, day and night.
    </p>

    <div class="more-content">

        <h4>🛡️ Security Features</h4>

        <ul class="security-list">
            <li>24×7 trained security personnel on duty</li>
            <li>Controlled entry and exit for visitors</li>
            <li>Identity verification at the entrance</li>
            <li>Regular security patrols throughout the campus</li>
            <li>Separate security arrangements for boys' and girls' hostels</li>
            <li>Emergency assistance available at all times</li>
        </ul>

        <h4>🚪 Access Control</h4>

        <ol class="security-steps">
            <li>Resident ID verification</li>
            <li>Visitor registration at reception</li>
            <li>Entry permission from hostel management</li>
            <li>Digital visitor log maintenance</li>
            <li>Exit verification for visitors</li>
        </ol>

        <h4>⭐ Resident Benefits</h4>

        <ul class="security-list">
            <li>Safe and secure living environment</li>
            <li>Protection against unauthorized entry</li>
            <li>Quick response during emergencies</li>
            <li>Peace of mind for residents and parents</li>
            <li>Continuous monitoring of hostel premises</li>
        </ul>

    </div>

    <!-- <button class="view-more-btn">
        View More
    </button> -->

</div>
 <!-- ==================== CCTV SURVEILLANCE ==================== -->
<div class="service-card">

    <div class="service-card__icon">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M23 7l-7 5 7 5V7z"/>
            <rect x="1" y="5" width="15" height="14" rx="2"/>
        </svg>
    </div>

    <h3>CCTV Surveillance</h3>

    <p>
        CCTV cameras monitor corridors and common areas 24×7, providing a safe and secure environment for all residents.
    </p>

    <div class="more-content">

        <h4>📹 CCTV Features</h4>

        <ul class="cctv-list">
            <li>24×7 CCTV monitoring throughout the hostel</li>
            <li>High-definition cameras for clear recording</li>
            <li>Coverage of entrances, exits, corridors, and common areas</li>
            <li>Continuous video recording with secure storage</li>
            <li>Monitoring by authorized hostel management</li>
            <li>Quick incident review when required</li>
        </ul>

        <h4>📍 Monitoring Areas</h4>

        <ol class="cctv-steps">
            <li>Main Entrance & Exit Gates</li>
            <li>Reception Area</li>
            <li>Hostel Corridors</li>
            <li>Dining Hall</li>
            <li>Parking Area</li>
            <li>Common Study & Recreation Areas</li>
        </ol>

        <h4>🛡️ Benefits</h4>

        <ul class="cctv-list">
            <li>Enhances resident safety and security</li>
            <li>Discourages unauthorized access</li>
            <li>Supports quick response during emergencies</li>
            <li>Provides evidence for incident investigations</li>
            <li>Gives peace of mind to residents and parents</li>
        </ul>

    </div>

    <!-- <button class="view-more-btn">
        View More
    </button> -->

</div>
<!-- ================= END CCTV SURVEILLANCE ================= -->

<!-- ==================== PARKING ==================== -->
<div class="service-card">

    <div class="service-card__icon">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="1" y="3" width="15" height="13" rx="2"/>
            <path d="M16 8h4l3 3v5h-7V8z"/>
            <circle cx="5.5" cy="18.5" r="1.5"/>
            <circle cx="18.5" cy="18.5" r="1.5"/>
        </svg>
    </div>

    <h3>Parking</h3>

    <p>
        Designated, secure parking space for bikes, scooters, and other personal vehicles.
    </p>

    <div class="more-content">

        <h4>🅿️ Parking Facilities</h4>

        <ul class="parking-list">
            <li>Dedicated parking area for residents</li>
            <li>Separate parking for bikes and scooters</li>
            <li>Well-lit parking zone for night safety</li>
            <li>24×7 CCTV surveillance</li>
            <li>Easy entry and exit access</li>
            <li>Clean and organized parking space</li>
        </ul>

        <h4>🚗 Parking Guidelines</h4>

        <ol class="parking-steps">
            <li>Park only in the allotted space.</li>
            <li>Display your hostel parking sticker.</li>
            <li>Lock your vehicle before leaving.</li>
            <li>Follow speed limits inside the campus.</li>
            <li>Keep emergency pathways clear.</li>
        </ol>

        <h4>⭐ Benefits</h4>

        <ul class="parking-list">
            <li>Safe parking with CCTV monitoring</li>
            <li>Protection from weather conditions</li>
            <li>Quick access to your vehicle</li>
            <li>Reduced risk of theft or damage</li>
            <li>Convenient parking for daily commuting</li>
        </ul>

    </div>

    <!-- <button class="view-more-btn">
        View More 
    </button> -->

</div>
<!-- ================= END PARKING ==================== -->

<!-- ==================== READING HALL ==================== -->
<div class="service-card">

    <div class="service-card__icon">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
        </svg>
    </div>

    <h3>Reading Hall</h3>

    <p>
        A calm, quiet, and well-lit space designed for focused study, reading, and exam preparation.
    </p>

    <div class="more-content">

        <h4>📚 Reading Hall Facilities</h4>

        <ul class="reading-list">
            <li>Peaceful and distraction-free environment</li>
            <li>Comfortable seating with spacious study desks</li>
            <li>Bright LED lighting for extended study hours</li>
            <li>High-speed Wi-Fi for online learning</li>
            <li>Power outlets for charging laptops and devices</li>
            <li>Regular cleaning and maintenance</li>
        </ul>

        <h4>⏰ Hall Timings</h4>

        <ol class="reading-steps">
            <li>Open from early morning to late night</li>
            <li>Available every day of the week</li>
            <li>Extended hours during examination periods</li>
            <li>Quiet study rules to maintain concentration</li>
            <li>Dedicated study space for all residents</li>
        </ol>

        <h4>🎓 Benefits</h4>

        <ul class="reading-list">
            <li>Improves focus and productivity</li>
            <li>Ideal for exam preparation and assignments</li>
            <li>Comfortable atmosphere for long study sessions</li>
            <li>Supports online classes and research</li>
            <li>Encourages disciplined study habits</li>
        </ul>

    </div>

    <!-- <button class="view-more-btn">
        View More 
    </button> -->

</div>
<!-- ================= END READING HALL ==================== -->
 <!-- ==================== EXPERIENCED WARDENS ==================== -->
<div class="service-card">

    <div class="service-card__icon">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
            <circle cx="12" cy="7" r="4"/>
        </svg>
    </div>

    <h3>Experienced Wardens</h3>

    <p>
        Friendly and responsible wardens are available on-site to ensure residents' safety, comfort, and well-being.
    </p>

    <div class="more-content">

        <h4>👨‍💼 Warden Responsibilities</h4>

        <ul class="warden-list">
            <li>24×7 resident support and guidance</li>
            <li>Maintain hostel discipline and safety</li>
            <li>Assist new residents during check-in</li>
            <li>Monitor hostel facilities and cleanliness</li>
            <li>Handle resident concerns promptly</li>
            <li>Coordinate with management when needed</li>
        </ul>

        <h4>📋 Resident Support</h4>

        <ol class="warden-steps">
            <li>Daily attendance and resident monitoring</li>
            <li>Visitor verification and entry management</li>
            <li>Emergency assistance and first response</li>
            <li>Complaint registration and follow-up</li>
            <li>Communication with parents when required</li>
        </ol>

        <h4>⭐ Benefits</h4>

        <ul class="warden-list">
            <li>Safe and well-managed hostel environment</li>
            <li>Immediate support during emergencies</li>
            <li>Friendly guidance for new residents</li>
            <li>Quick resolution of day-to-day issues</li>
            <li>Peace of mind for students and parents</li>
        </ul>

    </div>

    <!-- <button class="view-more-btn">
        View More
    </button> -->

</div>
<!-- ================= END EXPERIENCED WARDENS ==================== -->

<!-- ==================== EMERGENCY SUPPORT ==================== -->
<div class="service-card">

    <div class="service-card__icon">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 9v4"/>
            <path d="M12 17h.01"/>
            <path d="M10.29 3.86L2.16 17.93A1 1 0 0 0 3 19.5h18a1 1 0 0 0 .87-1.57L13.71 3.86a1 1 0 0 0-1.72 0z"/>
        </svg>
    </div>

    <h3>Emergency Support</h3>

    <p>
        Our dedicated emergency support team is available 24×7 to provide immediate assistance for medical, safety, and personal emergencies.
    </p>

    <div class="more-content">

        <h4>🚨 Emergency Services</h4>

        <ul class="emergency-list">
            <li>24×7 emergency assistance</li>
            <li>Immediate response to medical emergencies</li>
            <li>Emergency transportation assistance</li>
            <li>First-aid support within the hostel</li>
            <li>Quick contact with nearby hospitals</li>
            <li>Support during fire and safety incidents</li>
        </ul>

        <h4>📞 Emergency Response Process</h4>

        <ol class="emergency-steps">
            <li>Contact the hostel warden or emergency helpline.</li>
            <li>Emergency team reaches the location immediately.</li>
            <li>First aid is provided if required.</li>
            <li>Hospital or ambulance is contacted when necessary.</li>
            <li>Parents or guardians are informed promptly.</li>
        </ol>

        <h4>❤️ Resident Benefits</h4>

        <ul class="emergency-list">
            <li>Immediate help at any time of the day</li>
            <li>Fast medical assistance</li>
            <li>Safe and secure hostel environment</li>
            <li>Experienced wardens and support staff</li>
            <li>Peace of mind for residents and parents</li>
        </ul>

    </div>

    <!-- <button class="view-more-btn">
        View More
    </button> -->

</div>
<!-- ================= END EMERGENCY SUPPORT ==================== -->

        </div> <!-- /.services-grid -->

    </div> <!-- /.container -->

</section>


    
    <script src="assets/js/header.js"></script>
    <script src="assets/js/services.js"></script>
    
</body>  
</html>