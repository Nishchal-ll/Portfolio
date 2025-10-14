import React, { useState, useEffect } from "react";
import { Github, Linkedin, Instagram, Mail } from "lucide-react";
import { Helmet } from "react-helmet";

const Contact = () => {
  const [isVisible, setIsVisible] = useState(false);

  useEffect(() => {
    setIsVisible(true); // trigger animations on mount
  }, []);

  const socialLinks = [
    { name: "GitHub", icon: <Github size={20} />, link: "https://github.com/Nishchal-ll" },
    { name: "LinkedIn", icon: <Linkedin size={20} />, link: "https://linkedin.com/in/nishchal" },
    { name: "Instagram", icon: <Instagram size={20} />, link: "https://instagram.com/nishchal" },
  ];

  return (
    <>
     <Helmet>
      <title>Contact | Nishchal Acharya</title>
      <meta
        name="description"
        content="Get in touch with Nishchal Acharya — Fullstack Developer available for freelance, collaboration, or full-time opportunities. Reach out via email or social media."
      />
      <meta
        name="keywords"
        content="Contact Nishchal Acharya, hire Fullstack Developer, freelance developer Nepal, React developer contact, Laravel developer"
      />
    </Helmet>
    <div className="min-h-screen bg-white font-poppins flex items-center justify-center transition-all duration-500">
      {/* Contact Content */}
      <div className="container mx-auto px-4 py-16 text-center max-w-3xl">
        {/* Header */}
        <div className={`mb-12 transition-all duration-1000 ${isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'}`}>
          <h1 className="text-4xl md:text-5xl font-bold mb-4 text-gray-900 transition-all duration-300">
            Let’s Build Something Great Together
          </h1>
          <p className="text-lg text-gray-600 transition-all duration-300">
            Whether you have an exciting project in mind, a creative idea to share, or just want to say hello, I’d love to hear from you. I enjoy connecting with people, collaborating on innovative solutions, and exploring new possibilities. I usually respond quickly - unless I’m deep in the middle of coding something awesome!
          </p>
        </div>

        {/* Social Links */}
        <div className={`flex justify-center flex-wrap gap-6 mb-12 transition-all duration-1000 delay-200 ${isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'}`}>
          {socialLinks.map((social, index) => (
            <a
              key={index}
              href={social.link}
              target="_blank"
              rel="noopener noreferrer"
              className="flex items-center gap-3 px-6 py-3 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 shadow-lg bg-gray-100 text-black hover:bg-red-500 hover:text-white"
               style={{
                    animation: `float 3s ease-in-out infinite ${index * 0.2}s`,
                  }}
            >
              {social.icon}
              {social.name}
            </a>
          ))}
        </div>

        {/* Email Section */}
        <div className={`transition-all duration-1000 delay-400 ${isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'}`}>
          <p className="text-md mb-2 text-gray-600 transition-all duration-300">
            Prefer a good old-fashioned email?
          </p>
          <a
            href="mailto:acharyanischal2004@gmail.com"
            className="inline-flex items-center gap-2 text-lg font-medium text-cyan-600 hover:text-cyan-500 transition-all duration-300"
          >
            <Mail size={20} />
            acharyanischal2004@gmail.com
          </a>
        </div>
      </div>

      {/* Animations & Font */}
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        @keyframes fadeUp {
          0% { opacity: 0; transform: translateY(20px); }
          100% { opacity: 1; transform: translateY(0); }
        }
          @keyframes float {
          0%, 100% { transform: translateY(0px); }
          50% { transform: translateY(-10px); }
        }
      `}</style>
    </div>
    </>
  );
};

export default Contact;
