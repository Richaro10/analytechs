import React from 'react';
import { Mail, Phone, MapPin, Linkedin, Twitter } from 'lucide-react';
import { useLocation } from 'react-router-dom';

const Contact = () => {
  const location = useLocation();

  return (
    <div className="min-h-screen bg-white">
      {/* Bannière */}
      <div className="relative bg-gradient-to-r from-[#1E3A8A] to-[#3B82F6] pt-24">
        <div className="absolute inset-0 overflow-hidden">
          <div className="absolute -inset-[10px] bg-[linear-gradient(45deg,transparent_25%,rgba(68,107,158,0.2)_50%,transparent_75%,transparent_100%)] bg-[length:60px_60px] animate-[gradient_3s_linear_infinite]"></div>
        </div>
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative">
          <div className="max-w-3xl">
            <h1 className="text-4xl font-bold text-white mb-4">Contactez-nous</h1>
            <p className="text-xl text-gray-100">
              Nous sommes là pour répondre à vos questions et vous accompagner dans vos projets
            </p>
          </div>
        </div>
        <div className="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-b from-transparent to-white"></div>
      </div>

      {/* Contenu */}
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div className="grid md:grid-cols-2 gap-12">
          <div>
            <div className="space-y-6">
              <div className="flex items-center">
                <Mail className="h-6 w-6 text-accent mr-4" />
                <div>
                  <h3 className="font-semibold text-neutral">Email</h3>
                  <p className="text-gray-600">contact@analytechs.fr</p>
                </div>
              </div>
              <div className="flex items-center">
                <Phone className="h-6 w-6 text-accent mr-4" />
                <div>
                  <h3 className="font-semibold text-neutral">Téléphone</h3>
                  <p className="text-gray-600">+33 1 23 45 67 89</p>
                </div>
              </div>
              <div className="flex items-center">
                <MapPin className="h-6 w-6 text-accent mr-4" />
                <div>
                  <h3 className="font-semibold text-neutral">Adresse</h3>
                  <p className="text-gray-600">123 Avenue des Champs-Élysées, 75008 Paris</p>
                </div>
              </div>
              <div className="flex space-x-4 pt-4">
                <a href="#" className="text-neutral hover:text-accent transition-colors">
                  <Linkedin className="h-6 w-6" />
                </a>
                <a href="#" className="text-neutral hover:text-accent transition-colors">
                  <Twitter className="h-6 w-6" />
                </a>
              </div>
            </div>
          </div>
          <div className="bg-white rounded-lg shadow-lg p-8">
            <form className="space-y-6">
              <div>
                <label htmlFor="name" className="block text-sm font-medium text-neutral mb-2">
                  Nom complet
                </label>
                <input
                  type="text"
                  id="name"
                  className="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-transparent"
                />
              </div>
              <div>
                <label htmlFor="email" className="block text-sm font-medium text-neutral mb-2">
                  Email
                </label>
                <input
                  type="email"
                  id="email"
                  className="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-transparent"
                />
              </div>
              <div>
                <label htmlFor="subject" className="block text-sm font-medium text-neutral mb-2">
                  Sujet
                </label>
                <input
                  type="text"
                  id="subject"
                  className="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-transparent"
                />
              </div>
              <div>
                <label htmlFor="message" className="block text-sm font-medium text-neutral mb-2">
                  Message
                </label>
                <textarea
                  id="message"
                  rows={4}
                  className="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-transparent"
                ></textarea>
              </div>
              <button
                type="submit"
                className="w-full bg-accent hover:bg-[#D97706] text-white font-medium py-3 px-6 rounded-md transition-colors"
              >
                Envoyer le message
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Contact;