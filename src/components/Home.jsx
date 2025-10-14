import React, { useState, useEffect } from "react";
import { Github, Instagram, Linkedin } from "lucide-react";
import { Helmet } from "react-helmet";

const Home = () => {
  const [isVisible, setIsVisible] = useState(false);

  useEffect(() => {
    setIsVisible(true);
  }, []);

  return (
    <>
    <Helmet>
        {/* Primary SEO */}
        <title>Nishchal Acharya | Fullstack Developer</title>
        <meta
          name="description"
          content="Portfolio of Nishchal Acharya - Fullstack Developer skilled in React, JavaScript, Node.js, PHP, Laravel, and Tailwind CSS."
        />
        </Helmet>
    <div className="min-h-screen bg-white transition-all duration-500">
      {/* Home Page Content */}
      <div className="container mx-auto px-4 py-16 min-h-screen flex items-center pt-32">
        <div className="grid md:grid-cols-2 gap-12 items-center w-full">
          {/* Image Section */}
          <div
            className={`flex justify-center transition-all duration-1000 transform ${
              isVisible
                ? "translate-x-0 opacity-100"
                : "-translate-x-full opacity-0"
            }`}
          >
<div className="relative group">
  <img
    src="./me1.png"
    alt="Nishchal Acharya"
    className="w-full h-auto max-w-sm sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl mx-auto object-contain"
  />
</div>

          </div>

          {/* Content Section */}
          <div
            className={`space-y-6 transition-all duration-1000 delay-300 transform ${
              isVisible
                ? "translate-x-0 opacity-100"
                : "translate-x-full opacity-0"
            }`}
          >
            <h1 className="text-6xl md:text-6xl font-bold text-gray-900 transition-all duration-300">
              Full Stack Developer & Tech Explorer
            </h1>

            <p className="text-lg leading-relaxed text-gray-600 transition-all duration-300">
              I craft modern web applications and robust backends as a versatile full-stack developer, blending React, Laravel, and Node.js expertise to deliver solutions that are fast, scalable, and engaging. My focus is on creating seamless user experiences while balancing performance, security, and cutting-edge technology - exploring new ideas and pushing the boundaries of full-stack development.
            </p>

            {/* Social Icons */}
            <div className="flex gap-4 pt-4">
              {[
                { Icon: Github, href: "https://www.github.com/Nishchal-ll" },
                { Icon: Instagram, href: "https://www.instagram.com/nishchal._.l" },
                { Icon: Linkedin, href: "https://www.linkedin.com/in/nishchal-acharya-2b350a312" },
              ].map(({ Icon, href }, index) => (
                <a
                  key={index}
                  href={href}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="p-3 rounded-lg bg-gray-100 text-gray-700 hover:bg-red-500 hover:text-white transition-all duration-300 transform hover:scale-110 hover:-translate-y-1 shadow-md hover:shadow-lg"
                  style={{
                    animation: `float 3s ease-in-out infinite ${index * 0.2}s`,
                  }}
                >
                  <Icon size={28} />
                </a>
              ))}
            </div>
          </div>
        </div>
      </div>

      <style>{`
        @keyframes float {
          0%, 100% { transform: translateY(0px); }
          50% { transform: translateY(-10px); }
        }
      `}</style>
    </div>
    </>
  );
};

export default Home;
