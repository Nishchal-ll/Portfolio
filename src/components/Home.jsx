import React, { useState, useEffect } from "react";
import { Github, Instagram, Linkedin, Terminal, ChevronRight } from "lucide-react";
import { Helmet } from "react-helmet";
import LinuxBackdrop from "./LinuxBackdrop";

const Home = () => {
  const [isVisible, setIsVisible] = useState(false);

  useEffect(() => {
    setIsVisible(true);
  }, []);

  return (
    <>
      <Helmet>
        <title>Nishchal Acharya | Fullstack Developer</title>
        <meta name="description" content="Welcome to the portfolio of Nishchal Acharya — a passionate Fullstack Developer." />
        <meta name="keywords" content="Nishchal Acharya, Fullstack Developer, Golang, Laravel, React.js, Nepal" />
        <meta name="author" content="Nishchal Acharya" />
      </Helmet>

      <div className="relative min-h-screen overflow-hidden transition-all duration-500">
        <LinuxBackdrop />

        {/* ── Main Content ── */}
        {/* pt-8 to clear system bar, pt-24 to clear navbar */}
        <div className="relative z-10 mx-auto flex min-h-screen w-full max-w-7xl items-center px-4 pb-12 pt-32 sm:px-6 md:pt-28 lg:px-8">
          <div className="grid w-full grid-cols-1 items-center gap-8 md:grid-cols-[minmax(0,0.9fr)_minmax(0,1.1fr)] lg:gap-16">

            {/* ── Image Section (CSS unchanged) ── */}
            <div
              className={`flex justify-center transition-all duration-1000 transform ${
                isVisible ? "translate-x-0 opacity-100" : "-translate-x-full opacity-0"
              }`}
            >
              <div className="relative group w-full max-w-[18rem] sm:max-w-sm md:max-w-md lg:max-w-lg">
                <div className="pointer-events-none absolute inset-x-[-10%] bottom-[3%] top-[10%] -z-10 hidden rounded-[42%_58%_55%_45%/46%_38%_62%_54%] bg-cyan-300/25 blur-3xl dark:block" />
                <div className="pointer-events-none absolute inset-x-[3%] bottom-[3%] top-[18%] -z-10 hidden rounded-[45%_55%_49%_51%/42%_36%_64%_58%] bg-[radial-gradient(circle_at_32%_18%,rgba(103,232,249,0.7),transparent_24%),linear-gradient(135deg,rgba(8,145,178,0.92),rgba(15,23,42,0.96)_58%,rgba(30,41,59,0.92))] shadow-[0_0_80px_rgba(34,211,238,0.34)] dark:block" />
                <div className="pointer-events-none absolute inset-x-[8%] bottom-[7%] top-[23%] -z-10 hidden rounded-[46%_54%_52%_48%/45%_39%_61%_55%] border border-cyan-300/20 opacity-60 [background-image:linear-gradient(rgba(103,232,249,0.12)_1px,transparent_1px),linear-gradient(90deg,rgba(103,232,249,0.12)_1px,transparent_1px)] [background-size:18px_18px] dark:block" />
                <img
                  src="./me1.png"
                  alt="Nishchal Acharya"
                  loading="lazy"
                  className="relative z-10 mx-auto h-auto w-full object-contain grayscale drop-shadow-none transition duration-500 ease-in-out group-hover:grayscale-0 dark:drop-shadow-[0_28px_42px_rgba(0,0,0,0.48)]"
                />
              </div>
            </div>

            {/* ── Linux Terminal Box ── */}
            <div
              className={`transition-all duration-1000 delay-300 transform ${
                isVisible ? "translate-x-0 opacity-100" : "translate-x-full opacity-0"
              }`}
            >
              <div className="w-full overflow-hidden rounded-xl border border-gray-200 bg-white/95 shadow-xl shadow-gray-200/80 backdrop-blur dark:border-slate-700 dark:bg-slate-900/95 dark:shadow-black/30">

                {/* Window chrome top bar */}
                <div className="flex items-center justify-between border-b border-gray-200 bg-gray-100 px-4 py-2.5 select-none dark:border-slate-700 dark:bg-slate-800">
                  <div className="flex items-center gap-2">
                    <div className="w-3 h-3 rounded-full bg-red-500 cursor-pointer hover:bg-red-600 transition-colors" />
                    <div className="w-3 h-3 rounded-full bg-yellow-400 cursor-pointer hover:bg-yellow-500 transition-colors" />
                    <div className="w-3 h-3 rounded-full bg-green-500 cursor-pointer hover:bg-green-600 transition-colors" />
                  </div>
                  <div className="flex items-center gap-1.5 text-[11px] text-gray-500 font-mono sm:text-xs dark:text-slate-400">
                    <Terminal size={11} />
                    <span>_&gt; bash - 80x24</span>
                  </div>
                  <div className="text-xs text-gray-400 font-mono hidden sm:block dark:text-slate-500">
                    pts/0
                  </div>
                </div>

                {/* Terminal body */}
                <div className="space-y-5 bg-white/95 px-4 py-5 font-mono sm:px-6 dark:bg-slate-900/95">

                  {/* Prompt line */}
                  <div className="flex flex-wrap items-center gap-x-0 text-xs sm:text-sm">
                    <span className="text-blue-600 font-semibold">root@nishchal</span>
                    <span className="text-gray-400 dark:text-slate-500">:</span>
                    <span className="text-gray-700 dark:text-slate-300">~</span>
                    <span className="text-gray-700 dark:text-slate-300">$ ./init_portfolio.sh&nbsp;</span>
                    <span className="inline-block w-2 h-[14px] bg-gray-700 align-middle animate-pulse dark:bg-cyan-200" />
                  </div>

                  {/* Export heading */}
                  <h1 className="text-2xl font-bold leading-tight text-gray-900 sm:text-3xl md:text-4xl dark:text-slate-50">
                    <span className="text-blue-600 dark:text-cyan-300">export</span> ROLE=<br />
                    <span>"Full Stack Developer"</span>
                  </h1>

                  {/* Description */}
                  <div className="space-y-1.5 border-l-2 border-gray-300 pl-3 text-xs leading-relaxed text-gray-600 sm:text-sm dark:border-slate-700 dark:text-slate-300">
                    <p><span className="text-gray-400 dark:text-slate-500">&gt;</span> Crafting modern web applications using Golang, Laravel and React.</p>
                    <p><span className="text-gray-400 dark:text-slate-500">&gt;</span> Focusing on performance, security, and scalable architecture.</p>
                    <p><span className="text-gray-400 dark:text-slate-500">&gt;</span> <span className="text-amber-500 dark:text-amber-300">{"// Ready to deploy solutions."}</span></p>
                  </div>

                  {/* Social links */}
                  <div className="border-t border-dashed border-gray-200 pt-4 dark:border-slate-700">
                    <p className="mb-3 text-xs tracking-widest text-gray-400 uppercase dark:text-slate-500">
                      -- Connect [OPTIONS] --
                    </p>
                    <div className="flex flex-wrap gap-2 sm:gap-3">
                        {[
                        { icon: Github, href: "https://www.github.com/Nishchal-ll", label: "git clone" },
                        { icon: Instagram, href: "https://www.instagram.com/nishchal._.l", label: "dm_me" },
                        { icon: Linkedin, href: "https://www.linkedin.com/in/nishchal-acharya-2b350a312", label: "connect" },
                      ].map(({ icon, href, label }, index) => (
                        <a
                          key={index}
                          href={href}
                          target="_blank"
                          rel="noopener noreferrer"
                        className="group flex min-w-0 items-center gap-2 rounded-lg border border-gray-300 bg-white px-3 py-2 font-mono text-xs font-semibold text-gray-700 transition-all duration-200 hover:border-gray-500 hover:bg-gray-50 hover:text-gray-900 sm:px-4 sm:text-sm dark:border-slate-700 dark:bg-slate-950 dark:text-slate-300 dark:hover:border-cyan-500 dark:hover:bg-slate-800 dark:hover:text-cyan-200"
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

export default Home;
