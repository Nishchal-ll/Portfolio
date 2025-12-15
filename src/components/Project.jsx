import React from "react";
import { Github } from "lucide-react";
import { Helmet } from "react-helmet";

const Projects = () => {
  const projects = [
   {
  id: 1,
  title: "Morse Code Generator-Swing",
  description:
    "A Java Swing application that converts text into Morse code, supporting letters A-Z, numbers 0-9, and spaces with a simple GUI interface.",
  technologies: ["Java", "Swing", "HashMap"],
  githubLink: "https://github.com/Nishchal-ll/MorseCodeGenerator-Swing",
},
{
  id: 2,
  title: "JDBC Java Project",
  description:
    "A Java project demonstrating database connectivity using JDBC, allowing CRUD operations on a relational database through console input.",
  technologies: ["Java", "JDBC", "SQL"],
  githubLink: "https://github.com/Nishchal-ll/JDBC-Java.git",
},
{
  id: 3,
  title: "Car Rental Management System",
  description:
    "A console-based Java application to manage student information, including adding, updating, deleting, and viewing student records.",
  technologies: ["Java", "Console Application", "File Handling"],
  githubLink: "https://github.com/Nishchal-ll/CarRentalManagementSystem-CoreJava.git",
},
{
  id: 4,
  title: "MiniMotors E-commerce",
  description:
    "A full-stack e-commerce platform for Hot Wheels cars built with React and Laravel, featuring product browsing, cart functionality, Stripe checkout, and an admin dashboard.",
  technologies: ["React", "Laravel", "Khalti", "SQL"],
  githubLink: "https://github.com/Nishchal-ll/Minimotors-FullStack-Project.git",
},
{
  id: 5,
  title: "Super App Website - Gorkha Ride",
  description:
    "A responsive website for the Gorkha Ride app, built to promote the platform and its services, featuring a modern UI and engaging content for riders, service providers, and restaurants.",
  technologies: ["HTML", "CSS", "JavaScript", "Responsive Design"],
  githubLink: "https://github.com/Nishchal-ll/GorkhaRide-Website.git",
},
{
  id: 6,
  title: "PHP CRUD Application",
  description:
    "A simple PHP application implementing CRUD operations (Create, Read, Update, Delete) for managing records in a MySQL database.",
  technologies: ["PHP", "MySQL", "HTML", "CSS"],
  githubLink: "https://github.com/Nishchal-ll/PHP-Crud.git",
}
  ];

  return (
    <>
       <Helmet>
      <title>Projects | Nishchal Acharya</title>
      <meta
        name="description"
        content="Browse the latest web projects by Nishchal Acharya — featuring fullstack applications built using React, Node.js, and Laravel. Discover creative, efficient, and high-performing web solutions."
      />
      <meta
        name="keywords"
        content="Nishchal Acharya projects, React projects, Laravel projects, Node.js projects, Fullstack web apps, Portfolio projects, Web development"
      />
    </Helmet>
    <div className="min-h-screen bg-white transition-all duration-500">
      {/* Projects Grid */}
      <div className="container mx-auto px-4 py-32 mt-16">
        <div className="text-center mb-12">
          <h1 className="text-4xl md:text-5xl font-bold mb-3 text-gray-900 transition-all duration-300">
            My Projects
          </h1>
          <p className="text-lg text-gray-600 transition-all duration-300">
            A collection of my recent work and personal projects
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
          {projects.map((project, index) => (
            <div
              key={project.id}
              className="rounded-lg overflow-hidden shadow-md bg-white border border-gray-200 transition-all duration-300 transform hover:scale-105 hover:shadow-xl"
              style={{ animation: `fadeInUp 0.6s ease-out ${index * 0.1}s both` }}
            >
              <div className="p-5">
                <h3 className="text-xl font-bold mb-2 text-gray-900">
                  {project.title}
                </h3>
                <p className="text-sm mb-3 text-gray-600 line-clamp-2">
                  {project.description}
                </p>
                <div className="flex flex-wrap gap-2 mb-4">
                  {project.technologies.map((tech, idx) => (
                    <span
                      key={idx}
                      className="px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-600"
                    >
                      {tech}
                    </span>
                  ))}
                </div>
                <a
                  href={project.githubLink}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="flex items-center justify-center gap-2 px-4 py-2 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 bg-gray-200 text-black hover:bg-red-500 hover:text-white"
                >
                  <Github size={16} />
                  View Code
                </a>
              </div>
            </div>
          ))}
        </div>
      </div>

      <style>{`
        @keyframes fadeInUp {
          from { opacity: 0; transform: translateY(30px); }
          to { opacity: 1; transform: translateY(0); }
        }
        .line-clamp-2 {
          display: -webkit-box;
          -webkit-line-clamp: 2;
          -webkit-box-orient: vertical;
          overflow: hidden;
        }
      `}</style>
    </div>
    </>
  );
};

export default Projects;
