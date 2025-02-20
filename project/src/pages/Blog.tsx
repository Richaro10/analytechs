import React from 'react';
import { Calendar, Clock, User } from 'lucide-react';
import { Link, useLocation } from 'react-router-dom';
import { useContent } from '../hooks/useContent';
import type { BlogPost } from '../types/content';

const Blog = () => {
  const location = useLocation();
  const { data: posts, loading } = useContent<BlogPost[]>('blog-posts');

  const defaultPosts = [
    {
      id: 1,
      slug: 'importance-business-intelligence',
      title: "L'importance de la Business Intelligence dans la prise de décision",
      excerpt: "Découvrez comment la BI peut transformer votre processus de prise de décision et améliorer la performance de votre entreprise.",
      author: "Marie Dubois",
      date: "15 Mars 2024",
      content: "",
      image: {
        url: "https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2015&q=80"
      }
    },
    {
      id: 2,
      slug: 'guide-analyse-predictive',
      title: "Guide complet sur l'analyse prédictive",
      excerpt: "Apprenez à utiliser l'analyse prédictive pour anticiper les tendances et prendre de l'avance sur vos concurrents.",
      author: "Thomas Martin",
      date: "12 Mars 2024",
      content: "",
      image: {
        url: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
      }
    },
    {
      id: 3,
      slug: 'meilleures-pratiques-data-governance',
      title: "Les meilleures pratiques en Data Governance",
      excerpt: "Un guide pratique pour mettre en place une gouvernance des données efficace dans votre organisation.",
      author: "Sophie Bernard",
      date: "10 Mars 2024",
      content: "",
      image: {
        url: "https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2076&q=80"
      }
    }
  ];

  const displayPosts = posts || defaultPosts;

  if (loading) {
    return (
      <div className="min-h-screen bg-white">
        <div className="relative bg-gradient-to-r from-[#1E3A8A] to-[#3B82F6] pt-24">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative">
            <div className="max-w-3xl animate-pulse">
              <div className="h-8 bg-white/20 rounded w-1/2 mb-4"></div>
              <div className="h-4 bg-white/20 rounded w-2/3"></div>
            </div>
          </div>
          <div className="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-b from-transparent to-white"></div>
        </div>

        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            {[1, 2, 3].map((i) => (
              <div key={i} className="bg-white rounded-lg shadow-lg overflow-hidden animate-pulse">
                <div className="h-48 bg-gray-200"></div>
                <div className="p-6">
                  <div className="h-6 bg-gray-200 rounded w-3/4 mb-3"></div>
                  <div className="h-4 bg-gray-200 rounded w-full mb-2"></div>
                  <div className="h-4 bg-gray-200 rounded w-2/3 mb-4"></div>
                  <div className="flex items-center space-x-4">
                    <div className="h-4 bg-gray-200 rounded w-20"></div>
                    <div className="h-4 bg-gray-200 rounded w-24"></div>
                    <div className="h-4 bg-gray-200 rounded w-16"></div>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </div>
    );
  }

  return (
    <div className="min-h-screen bg-white">
      <div className="relative bg-gradient-to-r from-[#1E3A8A] to-[#3B82F6] pt-24">
        <div className="absolute inset-0 overflow-hidden">
          <div className="absolute -inset-[10px] bg-[linear-gradient(45deg,transparent_25%,rgba(68,107,158,0.2)_50%,transparent_75%,transparent_100%)] bg-[length:60px_60px] animate-[gradient_3s_linear_infinite]"></div>
        </div>
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative">
          <div className="max-w-3xl">
            <h1 className="text-4xl font-bold text-white mb-4">Blog</h1>
            <p className="text-xl text-gray-100">
              Découvrez nos derniers articles sur la data, la BI et la stratégie d'entreprise
            </p>
          </div>
        </div>
        <div className="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-b from-transparent to-white"></div>
      </div>

      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          {displayPosts.map((post) => (
            <article key={post.id} className="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow group">
              <Link to={`/blog/${post.slug}`} className="block">
                <div className="relative h-48 overflow-hidden">
                  <img 
                    src={post.image.url} 
                    alt={post.title}
                    className="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300"
                  />
                  <div className="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
                <div className="p-6">
                  <h2 className="text-xl font-semibold text-neutral mb-3 group-hover:text-accent transition-colors">
                    {post.title}
                  </h2>
                  <p className="text-gray-600 mb-4">
                    {post.excerpt}
                  </p>
                  <div className="flex items-center text-sm text-gray-500 space-x-4">
                    <div className="flex items-center">
                      <User className="h-4 w-4 mr-1" />
                      {post.author}
                    </div>
                    <div className="flex items-center">
                      <Calendar className="h-4 w-4 mr-1" />
                      {post.date}
                    </div>
                    <div className="flex items-center">
                      <Clock className="h-4 w-4 mr-1" />
                      5 min
                    </div>
                  </div>
                </div>
              </Link>
            </article>
          ))}
        </div>
      </div>
    </div>
  );
};

export default Blog;