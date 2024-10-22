# project1
The OBJ Music School platform is a straightforward, user-friendly web platform built using HTML, CSS, and PHP. It provides essential features for users, including a homepage, about page, courses page, contact page, and a course sign-up page. The platform enables visitors to learn more about the music school, explore various music courses, contact the school, and sign up for lessons, all through simple navigation.

Home Page (index.php)
The home page serves as the introductory page for visitors. It welcomes users with a brief description of the school and encourages them to explore the music courses offered. It features a prominent call-to-action button that directs users to the courses page. The layout is designed to give users a quick understanding of what the school offers and guide them further into the platform.

About Page (about.php)
The about page provides detailed information about the school, including its history, mission, and core values. It explains why students should choose OBJ Music School, highlighting the school's experienced teachers, diverse courses, and modern facilities. This page helps build trust with potential students and gives them an understanding of the school's goals and culture.

Courses Page (courses.php)
The courses page lists the various music lessons available at the school. Each course is briefly described, and students can browse through options like guitar, piano, drums, and vocal training. The page includes a button that directs users to the sign-up page, making it easy for students to select and register for their desired course.

Contact Page (contact.php)
The contact page includes a form that allows visitors to send inquiries to the school. Users can provide their name, email, and message, which will be processed by a PHP script. This page serves as a way for users to communicate with the school, ask questions, or request more information. Upon submission, the form data is processed by processorder.php, and a confirmation message is displayed.

Sign-Up Page (signup.php)
The sign-up page allows users to enroll in music courses by submitting their name, email, and chosen course. The form includes a dropdown menu of available courses, making it easy for users to select one that matches their interests. Once submitted, the form data is sent to processorder.php, which processes the enrollment and provides a success message to the user, confirming their registration.

Form Processing (processorder.php)
This PHP script handles the processing of both the sign-up and contact forms. It checks whether the submitted data is from the contact form or the course sign-up form and processes it accordingly. For course sign-ups, it thanks the user and confirms their chosen course. For contact form submissions, it acknowledges the user's message and confirms that the school will get back to them. This ensures both form types are handled efficiently and securely.

These pages work together to provide a complete experience for users, from browsing information about the school to registering for courses and communicating with the school administration. The platform is designed to be easy to navigate and intuitive, ensuring users can find what they need quickly.



