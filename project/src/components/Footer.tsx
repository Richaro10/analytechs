import React from 'react';
import { Mail, Phone, MapPin, Linkedin, Twitter } from 'lucide-react';
import Logo from './Logo';

const Footer = () => {
  return (
    <footer className="bg-gray-900 text-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {/* Section principale */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 py-16">
          {/* À propos */}
          <div className="space-y-4">
            <Logo className="text-white" />
            <p className="text-gray-400">
              Analytechs vous accompagne dans votre transformation digitale avec des solutions sur mesure en Business Intelligence, Data Analytics et Conseil en Management.
            </p>
            <div className="flex space-x-4">
              <a href="#" className="text-gray-400 hover:text-accent transition-colors">
                <Linkedin className="h-6 w-6" />
              </a>
              <a href="#" className="text-gray-400 hover:text-accent transition-colors">
                <Twitter className="h-6 w-6" />
              </a>
            </div>
          </div>

          {/* Services */}
          <div>
            <h3 className="text-lg font-semibold text-white mb-6">Nos Services</h3>
            <ul className="space-y-4">
              <li>
                <a href="/services" className="text-gray-400 hover:text-accent transition-colors">Business Intelligence</a>
              </li>
              <li>
                <a href="/services" className="text-gray-400 hover:text-accent transition-colors">Data Analytics</a>
              </li>
              <li>
                <a href="/services" className="text-gray-400 hover:text-accent transition-colors">Intelligence Artificielle</a>
              </li>
              <li>
                <a href="/services" className="text-gray-400 hover:text-accent transition-colors">Formation & Accompagnement</a>
              </li>
            </ul>
          </div>

          {/* Liens utiles */}
          <div>
            <h3 className="text-lg font-semibold text-white mb-6">Liens Utiles</h3>
            <ul className="space-y-4">
              <li>
                <a href="/about" className="text-gray-400 hover:text-accent transition-colors">À propos</a>
              </li>
              <li>
                <a href="/blog" className="text-gray-400 hover:text-accent transition-colors">Blog</a>
              </li>
              <li>
                <a href="/contact" className="text-gray-400 hover:text-accent transition-colors">Contact</a>
              </li>
              <li>
                <a href="/services" className="text-gray-400 hover:text-accent transition-colors">Services</a>
              </li>
            </ul>
          </div>

          {/* Contact */}
          <div>
            <h3 className="text-lg font-semibold text-white mb-6">Contact</h3>
            <ul className="space-y-4">
              <li className="flex items-center text-gray-400">
                <Mail className="h-5 w-5 text-accent mr-3" />
                contact@analytechs.fr
              </li>
              <li className="flex items-center text-gray-400">
                <Phone className="h-5 w-5 text-accent mr-3" />
                +33 1 23 45 67 89
              </li>
              <li className="flex items-center text-gray-400">
                <MapPin className="h-5 w-5 text-accent mr-3" />
                123 Avenue des Champs-Élysées<br />75008 Paris
              </li>
            </ul>
          </div>
        </div>

        {/* Barre de copyright */}
        <div className="border-t border-gray-800 py-8">
          <div className="flex flex-col md:flex-row justify-between items-center">
            <p className="text-gray-400 text-sm">
              © {new Date().getFullYear()} Analytechs. Tous droits réservés.
            </p>
            <div className="flex space-x-6 mt-4 md:mt-0">
              <a href="/mentions-legales" className="text-sm text-gray-400 hover:text-accent transition-colors">
                Mentions légales
              </a>
              <a href="/politique-de-confidentialite" className="text-sm text-gray-400 hover:text-accent transition-colors">
                Politique de confidentialité
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;