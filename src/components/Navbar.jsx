import React from "react";
import { NavLink } from "react-router-dom";

const Navbar = () => {
  const links = [
    { name: "Home", path: "/" },
    { name: "Projects", path: "/projects" },
    { name: "Contact", path: "/contact" },
  ];

  return (
    <div className="bg-gray-50 transition-all duration-500">
      <nav className="fixed top-0 left-0 right-0 z-50 py-6">
        <div className="container mx-auto px-4">
          <div className="max-w-md mx-auto rounded-full shadow-lg bg-white transition-all duration-300">
            <div className="flex items-center justify-between px-8 py-4">
              {links.map((link) => (
                <NavLink
                  key={link.name}
                  to={link.path}
                  className={({ isActive }) =>
                    `text-lg font-medium transition-colors duration-200 ${
                      isActive
                        ? "text-red-500" // Active link color
                        : "text-gray-700 hover:text-red-500" // Default + hover
                    }`
                  }
                >
                  {link.name}
                </NavLink>
              ))}
            </div>
          </div>
        </div>
      </nav>
    </div>
  );
};

export default Navbar;
