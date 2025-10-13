import React from "react";

const Navbar = () => {
  return (
    <div className="bg-gray-50 transition-all duration-500">
      <nav className="fixed top-0 left-0 right-0 z-50 py-6">
        <div className="container mx-auto px-4">
          <div className="max-w-md mx-auto rounded-full shadow-lg bg-white transition-all duration-300">
            <div className="flex items-center justify-between px-8 py-4">
              <a
                href="/"
                className="text-lg font-medium text-gray-700 hover:text-red-500 transition-colors duration-200"
              >
                Home
              </a>
              <a
                href="/projects"
                className="text-lg font-medium text-gray-700 hover:text-red-500 transition-colors duration-200"
              >
                Projects
              </a>
              <a
                href="/contact"
                className="text-lg font-medium text-gray-700 hover:text-red-500 transition-colors duration-200"
              >
                Contact
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  );
};

export default Navbar;
