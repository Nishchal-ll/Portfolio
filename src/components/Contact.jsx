import React, { useState, useEffect } from "react";
import { Github, Linkedin, Instagram, Mail, Terminal, ChevronRight } from "lucide-react";
import { Helmet } from "react-helmet";
import LinuxBackdrop from "./LinuxBackdrop";

const Contact = () => {
  const [isVisible, setIsVisible] = useState(false);

  useEffect(() => {
    setIsVisible(true);
  }, []);

  const socialLinks = [
    { icon: Github, label: "git clone", link: "https://github.com/Nishchal-ll" },
    { icon: Linkedin, label: "connect", link: "https://linkedin.com/in/nishchal-acharya-2b350a312" },
    { icon: Instagram, label: "dm_me", link: "https://instagram.com/nishchal._.l" },
  ];

  return (
    <>
      <Helmet>
        <title>Contact | Nishchal Acharya</title>
        <meta name="description" content="Get in touch with Nishchal Acharya — Fullstack Developer." />
        <meta name="keywords" content="Contact Nishchal Acharya, hire Fullstack Developer, freelance developer Nepal" />
      </Helmet>

      <div className="relative flex min-h-screen items-center justify-center overflow-hidden pt-28 transition-all duration-500">
        <LinuxBackdrop />
        <div className="relative z-10 mx-auto w-full max-w-2xl px-4 py-16 sm:px-6">

          {/* ── Terminal Window ── */}
          <div
            className={`transition-all duration-1000 transform ${
              isVisible ? "opacity-100 translate-y-0" : "opacity-0 translate-y-10"
            }`}
          >
            <div className="overflow-hidden rounded-xl border border-gray-200 bg-white/95 font-mono shadow-xl shadow-gray-200/80 backdrop-blur dark:border-slate-700 dark:bg-slate-900/95 dark:shadow-black/30">

              {/* Window chrome */}
              <div className="flex items-center justify-between border-b border-gray-200 bg-gray-100 px-4 py-2.5 select-none dark:border-slate-700 dark:bg-slate-800">
                <div className="flex items-center gap-2">
                  <div className="w-3 h-3 rounded-full bg-red-500" />
                  <div className="w-3 h-3 rounded-full bg-yellow-400" />
                  <div className="w-3 h-3 rounded-full bg-green-500" />
                </div>
                <div className="flex items-center gap-1.5 text-xs text-gray-500 dark:text-slate-400">
                  <Terminal size={11} />
                  <span>_&gt; bash - 80x24</span>
                </div>
                <div className="text-xs text-gray-400 hidden sm:block dark:text-slate-500">pts/2</div>
              </div>

              {/* Terminal body */}
              <div className="space-y-6 bg-white/95 px-4 py-6 sm:px-6 dark:bg-slate-900/95">

                {/* Prompt */}
                <div className="break-words text-xs sm:text-sm">
                  <span className="text-blue-600 font-semibold">root@nishchal</span>
                  <span className="text-gray-400 dark:text-slate-500">:</span>
                  <span className="text-gray-700 dark:text-slate-300">~/contact</span>
                  <span className="text-gray-700 dark:text-slate-300">$ ./reach_out.sh</span>
                  <span className="inline-block w-2 h-[14px] bg-gray-700 align-middle animate-pulse ml-1 dark:bg-cyan-200" />
                </div>

                {/* Output header */}
                <div className="space-y-1 text-sm">
                  <p className="text-xs text-gray-400 dark:text-slate-500">
                    <span className="text-blue-500 dark:text-cyan-300">$</span> whoami --contact
                  </p>
                  <h1 className="text-2xl font-bold leading-tight text-gray-900 sm:text-3xl dark:text-slate-50">
                    <span className="text-blue-600 dark:text-cyan-300">export</span> MSG=<br />
                    "Let's Build Something Great"
                  </h1>
                </div>

                {/* Description */}
                <div className="space-y-1.5 border-l-2 border-gray-300 pl-3 text-xs leading-relaxed text-gray-600 sm:text-sm dark:border-slate-700 dark:text-slate-300">
                  <p><span className="text-gray-400 dark:text-slate-500">&gt;</span> Whether you have a project, idea, or just want to say hello.</p>
                  <p><span className="text-gray-400 dark:text-slate-500">&gt;</span> I enjoy connecting, collaborating, and exploring new possibilities.</p>
                  <p><span className="text-gray-400 dark:text-slate-500">&gt;</span> <span className="text-amber-500 dark:text-amber-300">{"// Response time: usually fast, unless deep in a build."}</span></p>
                </div>

                {/* Social links */}
                <div className="border-t border-dashed border-gray-200 pt-5 dark:border-slate-700">
                  <p className="mb-3 text-xs tracking-widest text-gray-400 uppercase dark:text-slate-500">
                    -- Connect [OPTIONS] --
                  </p>
                  <div className="flex flex-wrap gap-2 sm:gap-3">
                    {socialLinks.map(({ icon, link, label }, index) => (
                      <a
                        key={index}
                        href={link}
                        target="_blank"
                        rel="noopener noreferrer"
                        className="group flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2 text-xs font-semibold text-gray-700 transition-all duration-200 hover:border-gray-500 hover:bg-gray-50 hover:text-gray-900 sm:text-sm dark:border-slate-700 dark:bg-slate-950 dark:text-slate-300 dark:hover:border-cyan-500 dark:hover:bg-slate-800 dark:hover:text-cyan-200"
                        style={{ animation: `float 3s ease-in-out infinite ${index * 0.2}s` }}
                      >
                        {React.createElement(icon, { size: 15 })}
                        <span>{label}</span>
                        <ChevronRight
                          size={12}
                          className="opacity-0 -ml-3 group-hover:opacity-100 group-hover:ml-0 transition-all duration-200"
                        />
                      </a>
                    ))}
                  </div>
                </div>

                {/* Email */}
                <div className="space-y-2 border-t border-dashed border-gray-200 pt-5 dark:border-slate-700">
                  <p className="text-xs tracking-widest text-gray-400 uppercase dark:text-slate-500">
                    -- Mail [DIRECT] --
                  </p>
                  <a
                    href="mailto:acharyanischal2004@gmail.com"
                    className="inline-flex max-w-full items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2 text-xs font-semibold text-gray-700 transition-all duration-200 hover:border-gray-500 hover:bg-gray-50 hover:text-gray-900 sm:text-sm dark:border-slate-700 dark:bg-slate-950 dark:text-slate-300 dark:hover:border-cyan-500 dark:hover:bg-slate-800 dark:hover:text-cyan-200"
                  >
                    <Mail size={14} />
                    <span className="break-all">acharyanischal2004@gmail.com</span>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>

        <style>{`
          @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-6px); }
          }
        `}</style>
      </div>
    </>
  );
};

export default Contact;
