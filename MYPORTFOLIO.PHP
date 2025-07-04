<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio of Majok</title
    <link rel="stylesheet" href="index.css">
    <style>
        /* Internal CSS for demonstration */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff;
        }

        header {
            background-color: rgba(0, 0, 0, 0.7);
            color: #00ffff;
            padding: 2em 0;
            text-align: center;
        }

        nav {
            margin-top: 1em;
        }

        nav a {
            margin: 0 15px;
            color: #00ffe1;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container, section, table {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            max-width: 1000px;
            margin: 20px auto;
            border-radius: 10px;
        }

        h2 {
            color: #00ffff;
        }

        .projects {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .project-card {
            background: #f0f0f0;
            color: #333;
            padding: 1em;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        footer {
            background: #222;
            color: #00ffff;
            text-align: center;
            padding: 1em;
            margin-top: 2em;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        a {
            color: #00ffd5;
        }
    </style>
</head>
<body>
    <header>
        <h1>MY PORTFOLIO</h1>
        <h2>Majok Deng Majok</h2>
        <nav>
            <a href="#about">About</a>
            <a href="#Projects">Projects</a>
            <a href="#contact">Contacts</a>
        </nav>
    </header>

    <div class="container">
        <h1>WELCOME TO MY PORTFOLIO</h1>
        <p>This is a paragraph about me.</p>
    </div>

    <section id="about">

        

        


        <h2>About Me</h2
        <p>Hello! I am Majok Deng Majok, a passionate cybersecurity student at Strathmore University currently in my second year doing a degree in Cybersecurity and Networking. I love things that deal with cloud computing since that is the field I will specialize in after my degree. I also like web development.</p>
        

        <p>I have done several projects and worked with different platforms like ALX and LinkedIn. Aside from computing and cybersecurity, I also like playing basketball and doing research.</p>
    </section>

    <section id="Projects">
        <h2>Projects</h2>
        <div class="projects">
            <div class="project-card">
                <h3>Music App</h3>
                <p>A music app for my programming class that stores, downloads, plays, and deletes music. It works great!</p>
                <p> School Database Managment System
                </p>
                <p> Technologies: PostgresSQL,SQL,ER Diagrams</p>
                <p> Descriptions</p>
                <p> Designed and implemented a robust school database system to manage student records,course registrations,and grades.Focused on normalization and relational integrity</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2>Contact</h2>
        <p>📞 Mobile: 0703020540</p>
        <p>📧 Email: <a href="mailto:majok.majok@strathmore.edu">majok.majok@strathmore.edu</a></p>

        <p>🔗 LinkedIn: <a href="https://www.linkedin.com/in/majok-deng-5b98962ba?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app">My Profile</a></p>
        <p>📷 Instagram: <a href="https://www.instagram.com/majok.thegreat?igsh=OW81cmNlY2kyeDIw">My Instagram</a></p>
        
        <p>💻 GitHub: <a href="https://github.com/Majokthegreat">My GitHub Profile</a></p>
        <p>🔗 LinkedIn: <a href="https://ke.linkedin.com">My Profile</a></p>
        
        
    
    </section>

    <section class="container">
        <h2>Career Info</h2>
        <table>
            <tr>
                <td>
                    <h4>Portfolio Highlights</h4>
                    <ul>
                        <li>Responsive HTML Layout</li>
                        <li>Responsive Music App</li>
                    </ul>
                </td>
                <td>
                    <h4>Career Achievements</h4>


                    

                    <p>Dveloped and presented a fully functional system with clear documentation.</p>
                    <p> Ensured accurate schema design and high query efficiency.</p>
                    <p> Cybersecurity Labs 
Technologies: Linux, Networking, Wireshark
Description:
Completed multiple hands-on cybersecurity labs including privilege escalation, penetration testing, and web exploitation.
 </p>

 <h4> Key achievements</h4>
 <p>Earned digital badges across multiple modules.

Demonstrated initiative in peer-led discussions and troubleshooting challenges.

 AWS Cloud Practitioner Essentials
Platform: Amazon Web Services (AWS)
Description:
Completed training on AWS architecture, IAM roles, compute, storage, and security services.
</p>
<p>Simulated cloud environments confidently in practice labs.

Supported peers in understanding cloud service fundamentals.

 iPesa App (OOP Model in Java)
Technologies: Java, UML Diagrams, OOP
Description:
Modeled a mobile money app using object-oriented principles with inheritance, polymorphism, and exception handling.
 </p>

 <p> Created clean, well-documented class structures.

Integrated user-friendly GUI for basic financial operations.

 Networking Simulation Projects
Technologies: Cisco Packet Tracer, IPv4/IPv6, Subnetting
Description:
Simulated network topologies and explored IPv6 transition mechanisms and MAC addressing techniques.
</p>

<p>Designed efficient topologies with accurate subnetting.

Successfully configured routers and switches with minimal troubleshooting.

Peer Study Group Leadership
Skills: Communication, Leadership, Mentorship
Description:
Led and organized weekly study groups for challenging units such as Data Structures, Cybersecurity, and Spanish.
</p>
<p>Improved peer performance and created a collaborative learning environment.

Recognized by classmates for mentoring and clear explanations.

Certifications in Progress
AWS Certified Cloud Practitioner (In progress)

Cisco CCNA (In progress)

TryHackMe Cybersecurity Labs

Udemy: Linux for Beginners
</p>


                </td>
                <td>
                    <h4>Academic Qualifications</h4>
                    <p>Bachelors in Cybersecurity and Networking at Strathmore University</p>
                    <p>Specialization:</p>
                    <ul>
                        <li>Data Analysis</li>
                        <li>Web Development</li>
                        <li>Cloud Computing</li>
                    </ul>
                </td>
            </tr>
        </table>
    </section>

    <section class="container">
        <h3>Peer Review</h3>
        <p>Majok Deng has great leadership and problem-solving skills, especially in project management.</p>
    </section>

    <footer>
        <p>© 2025 Majok Deng Majok. All rights reserved.</p>
    </footer>
</body>
</html>