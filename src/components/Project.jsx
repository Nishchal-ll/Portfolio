import React from "react";
import { Github } from "lucide-react";
import { Helmet } from "react-helmet";

const Projects = () => {
  const projects = [
    {
      id: 1,
      title: "Minimotors E-Commerce Platform",
      description:
        "A full-stack e-commerce platform built with React, Laravel, and SQL, featuring seamless Khalti payment integration, user authentication, and an admin dashboard.",
      technologies: ["React", "Laravel", "SQL", "Khalti"],
      githubLink: "https://github.com/Nishchal-ll/Full-Stack-Project",
    },
    {
        id: 2,
  title: "Student Management System",
  description:
    "A Core Java project demonstrating complete object-oriented programming concepts through a console-based bank system. It includes account management, transactions, inheritance, exception handling, file handling, and collections to simulate real banking operations.",
  technologies: ["Java", "OOP", "Collections"],
  githubLink: "https://github.com/Nishchal-ll/Student-Management-System",
    },
    {
  
  id: 3,
      title: "Gorkha Ride - Super App Website",
      description:
        "Company website for Gorkha Ride built with React on the frontend and Node.js/Express on the backend, providing seamless user experience and ride management features.",
      technologies: ["React", "Node.js", "Express"],
      githubLink: "https://github.com/Nishchal-ll",
    },
    {
      id: 4,
      title: "PHP CRUD Application",
      description:
        "A simple CRUD application developed using vanilla PHP and MySQL, demonstrating basic database operations and web functionality.",
      technologies: ["PHP", "MySQL", "HTML", "CSS"],
      githubLink: "https://github.com/Nishchal-ll/PHP-Crud",
    },
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
