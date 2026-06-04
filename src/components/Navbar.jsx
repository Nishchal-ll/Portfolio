import React from "react";
import { NavLink } from "react-router-dom";
import { Terminal } from "lucide-react";

const Navbar = () => {
  const links = [
    { name: "Home", path: "/" },
    { name: "Projects", path: "/projects" },
    { name: "Contact", path: "/contact" },
  ];

  return (
    <nav className="fixed top-8 left-0 right-0 z-40 py-2">
      <div className="mx-auto w-full max-w-2xl px-3 sm:px-4">
        <div className="mx-auto overflow-hidden rounded-xl border border-gray-200 bg-white/90 font-mono shadow-lg shadow-gray-100/80 backdrop-blur dark:border-slate-700 dark:bg-slate-900/90 dark:shadow-black/30">

          {/* Nav links row */}
          <div className="flex min-w-0 items-stretch">
            <div className="flex min-w-0 flex-1 items-center gap-2 border-r border-gray-200 px-3 py-2.5 text-gray-400 sm:flex-none sm:px-4 dark:border-slate-700 dark:text-slate-500">
              <Terminal size={13} className="text-blue-500" />
              <span className="truncate text-xs text-blue-600 sm:text-sm">~/portfolio $</span>
            </div>
            {links.map((link) => (
              <NavLink
                key={link.name}
                to={link.path}
                className={({ isActive }) =>
                  `flex-1 border-r border-gray-100 px-2 py-2.5 text-center text-xs transition-colors duration-200 last:border-r-0 hover:bg-gray-50 sm:flex-none sm:px-6 sm:text-sm dark:border-slate-800 dark:hover:bg-slate-800 ${
                    isActive
                      ? "text-blue-600 bg-blue-50 font-semibold dark:bg-cyan-500/10 dark:text-cyan-300"
                      : "text-gray-500 hover:text-gray-800 dark:text-slate-400 dark:hover:text-slate-100"
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
  );
};

export default Navbar;
