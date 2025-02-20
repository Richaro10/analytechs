import React from 'react';
import { useParams, Link } from 'react-router-dom';
import { ArrowLeft, Calendar, User, Clock } from 'lucide-react';
import { useContent } from '../hooks/useContent';
import type { BlogPost as BlogPostType } from '../types/content';

const BlogPost = () => {
  const { slug } = useParams<{ slug: string }>();
  const { data: posts, loading } = useContent<BlogPostType[]>('blog-posts');

  const defaultPosts = [
    {
      id: 1,
      slug: 'importance-business-intelligence',
      title: "L'importance de la Business Intelligence dans la prise de décision",
      excerpt: "Découvrez comment la BI peut transformer votre processus de prise de décision et améliorer la performance de votre entreprise.",
      content: `
        <h2>Introduction</h2>
        <p>Dans un monde où les données sont omniprésentes, la Business Intelligence (BI) est devenue un outil indispensable pour les entreprises qui souhaitent prendre des décisions éclairées. Mais qu'est-ce que la BI exactement et comment peut-elle transformer votre processus de prise de décision ?</p>

        <h2>Qu'est-ce que la Business Intelligence ?</h2>
        <p>La Business Intelligence regroupe les technologies, applications et pratiques permettant de collecter, intégrer, analyser et présenter les données d'entreprise. L'objectif est de fournir des informations exploitables pour améliorer la prise de décision.</p>

        <h2>Les avantages de la BI</h2>
        <ul>
          <li>Prise de décision plus rapide et plus précise</li>
          <li>Meilleure compréhension des tendances du marché</li>
          <li>Optimisation des opérations</li>
          <li>Avantage concurrentiel accru</li>
        </ul>

        <h2>Comment implémenter la BI ?</h2>
        <p>L'implémentation d'une solution de BI nécessite une approche structurée :</p>
        <ol>
          <li>Définition des objectifs</li>
          <li>Identification des sources de données</li>
          <li>Choix des outils appropriés</li>
          <li>Formation des équipes</li>
          <li>Mise en place d'un processus d'amélioration continue</li>
        </ol>

        <h2>Conclusion</h2>
        <p>La Business Intelligence est bien plus qu'un simple outil technologique : c'est un véritable levier de transformation pour les entreprises qui souhaitent rester compétitives dans un environnement en constante évolution.</p>
      `,
      author: "Marie Dubois",
      date: "15 Mars 2024",
      image: {
        url: "https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2015&q=80"
      }
    }
  ];

  const post = (posts || defaultPosts).find(p => p.slug === slug);

  if (loading) {
    return (
      <div className="min-h-screen bg-white pt-24">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
          <div className="animate-pulse">
            <div className="h-8 bg-gray-200 rounded w-3/4 mb-4"></div>
            <div className="h-48 bg-gray-200 rounded-lg mb-8"></div>
            <div className="space-y-4">
              <div className="h-4 bg-gray-200 rounded w-full"></div>
              <div className="h-4 bg-gray-200 rounded w-5/6"></div>
              <div className="h-4 bg-gray-200 rounded w-4/6"></div>
            </div>
          </div>
        </div>
      </div>
    );
  }

  if (!post) {
    return (
      <div className="min-h-screen bg-white pt-24">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 text-center">
          <h1 className="text-2xl font-bold text-neutral mb-4">Article non trouvé</h1>
          <p className="text-gray-600 mb-8">L'article que vous recherchez n'existe pas ou a été déplacé.</p>
          <Link 
            to="/blog"
            className="inline-flex items-center text-accent hover:text-primary transition-colors"
          >
            <ArrowLeft className="h-5 w-5 mr-2" />
            Retour aux articles
          </Link>
        </div>
      </div>
    );
  }

  return (
    <div className="min-h-screen bg-white pt-24">
      <article className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <Link 
          to="/blog"
          className="inline-flex items-center text-accent hover:text-primary transition-colors mb-8"
        >
          <ArrowLeft className="h-5 w-5 mr-2" />
          Retour aux articles
        </Link>

        <h1 className="text-4xl font-bold text-neutral mb-6">{post.title}</h1>
        
        <div className="flex items-center text-sm text-gray-500 space-x-4 mb-8">
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

        <img 
          src={post.image.url}
          alt={post.title}
          className="w-full h-[400px] object-cover rounded-lg mb-8"
        />

        <div 
          className="prose prose-lg max-w-none"
          dangerouslySetInnerHTML={{ __html: post.content }}
        />
      </article>
    </div>
  );
};

export default BlogPost;