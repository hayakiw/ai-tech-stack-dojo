<?php
$page_title = 'Next.jsで認証 - AI×Web開発 中級編 | AI Tech Stack';
$current_page = 'auth';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
$section_name = '第4部：認証機能';
$step_number = 13;
$total_steps = 24;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">Next.jsで認証</h1>

        <!-- イントロ -->
        <div class="bg-purple-50 border-l-4 border-purple-500 p-6 mb-8">
            <p class="text-lg">フロントエンドでの認証処理を実装します。ログインフォーム、トークン管理、認証状態に応じた表示切り替えを行います。</p>
        </div>

        <!-- 認証Context -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">認証Contextの作成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">contexts/AuthContext.tsx</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>"use client";

import { createContext, useContext, useState, useEffect, ReactNode } from "react";

type User = {
  id: number;
  email: string;
  name: string;
};

type AuthContextType = {
  user: User | null;
  token: string | null;
  login: (email: string, password: string) => Promise&lt;void&gt;;
  logout: () => void;
  isLoading: boolean;
};

const AuthContext = createContext&lt;AuthContextType | undefined&gt;(undefined);

export function AuthProvider({ children }: { children: ReactNode }) {
  const [user, setUser] = useState&lt;User | null&gt;(null);
  const [token, setToken] = useState&lt;string | null&gt;(null);
  const [isLoading, setIsLoading] = useState(true);

  // 初期化時にlocalStorageからトークンを復元
  useEffect(() => {
    const storedToken = localStorage.getItem("token");
    if (storedToken) {
      setToken(storedToken);
      fetchUser(storedToken);
    } else {
      setIsLoading(false);
    }
  }, []);

  // ユーザー情報取得
  const fetchUser = async (accessToken: string) => {
    try {
      const res = await fetch(`${process.env.NEXT_PUBLIC_API_URL}/auth/me`, {
        headers: { Authorization: `Bearer ${accessToken}` },
      });
      if (res.ok) {
        const userData = await res.json();
        setUser(userData);
      } else {
        // トークン無効
        localStorage.removeItem("token");
        setToken(null);
      }
    } catch (error) {
      console.error("Failed to fetch user:", error);
    } finally {
      setIsLoading(false);
    }
  };

  // ログイン
  const login = async (email: string, password: string) => {
    const res = await fetch(`${process.env.NEXT_PUBLIC_API_URL}/auth/login`, {
      method: "POST",
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
      body: new URLSearchParams({ username: email, password }),
    });

    if (!res.ok) {
      throw new Error("Login failed");
    }

    const data = await res.json();
    localStorage.setItem("token", data.access_token);
    setToken(data.access_token);
    await fetchUser(data.access_token);
  };

  // ログアウト
  const logout = () => {
    localStorage.removeItem("token");
    setToken(null);
    setUser(null);
  };

  return (
    &lt;AuthContext.Provider value={{ user, token, login, logout, isLoading }}&gt;
      {children}
    &lt;/AuthContext.Provider&gt;
  );
}

export function useAuth() {
  const context = useContext(AuthContext);
  if (context === undefined) {
    throw new Error("useAuth must be used within an AuthProvider");
  }
  return context;
}</pre>
                </div>
            </div>
        </section>

        <!-- プロバイダー設定 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">プロバイダー設定</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">app/layout.tsx</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>import { AuthProvider } from "@/contexts/AuthContext";

export default function RootLayout({
  children,
}: {
  children: React.ReactNode;
}) {
  return (
    &lt;html lang="ja"&gt;
      &lt;body&gt;
        &lt;AuthProvider&gt;
          {children}
        &lt;/AuthProvider&gt;
      &lt;/body&gt;
    &lt;/html&gt;
  );
}</pre>
                </div>
            </div>
        </section>

        <!-- ログインフォーム -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">ログインフォーム</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">app/login/page.tsx</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>"use client";

import { useState } from "react";
import { useRouter } from "next/navigation";
import { useAuth } from "@/contexts/AuthContext";
import Link from "next/link";

export default function LoginPage() {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [error, setError] = useState("");
  const [isLoading, setIsLoading] = useState(false);
  const { login } = useAuth();
  const router = useRouter();

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setError("");
    setIsLoading(true);

    try {
      await login(email, password);
      router.push("/");
    } catch (err) {
      setError("メールアドレスまたはパスワードが正しくありません");
    } finally {
      setIsLoading(false);
    }
  };

  return (
    &lt;div className="min-h-screen flex items-center justify-center bg-gray-50"&gt;
      &lt;div className="max-w-md w-full bg-white rounded-lg shadow p-8"&gt;
        &lt;h1 className="text-2xl font-bold text-center mb-6"&gt;ログイン&lt;/h1&gt;

        {error && (
          &lt;div className="bg-red-100 text-red-700 p-3 rounded mb-4"&gt;
            {error}
          &lt;/div&gt;
        )}

        &lt;form onSubmit={handleSubmit} className="space-y-4"&gt;
          &lt;div&gt;
            &lt;label className="block text-sm font-bold mb-1"&gt;メールアドレス&lt;/label&gt;
            &lt;input
              type="email"
              value={email}
              onChange={(e) =&gt; setEmail(e.target.value)}
              className="w-full border rounded px-3 py-2"
              required
            /&gt;
          &lt;/div&gt;

          &lt;div&gt;
            &lt;label className="block text-sm font-bold mb-1"&gt;パスワード&lt;/label&gt;
            &lt;input
              type="password"
              value={password}
              onChange={(e) =&gt; setPassword(e.target.value)}
              className="w-full border rounded px-3 py-2"
              required
            /&gt;
          &lt;/div&gt;

          &lt;button
            type="submit"
            disabled={isLoading}
            className="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 disabled:opacity-50"
          &gt;
            {isLoading ? "ログイン中..." : "ログイン"}
          &lt;/button&gt;
        &lt;/form&gt;

        &lt;p className="text-center mt-4 text-sm text-gray-600"&gt;
          アカウントをお持ちでない方は
          &lt;Link href="/register" className="text-blue-600 hover:underline"&gt;
            新規登録
          &lt;/Link&gt;
        &lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  );
}</pre>
                </div>
            </div>
        </section>

        <!-- ヘッダーでの認証表示 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">ヘッダーでの認証表示</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">components/Header.tsx</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>"use client";

import Link from "next/link";
import { useAuth } from "@/contexts/AuthContext";

export function Header() {
  const { user, logout, isLoading } = useAuth();

  return (
    &lt;header className="bg-white shadow"&gt;
      &lt;nav className="container mx-auto px-6 py-4 flex justify-between items-center"&gt;
        &lt;Link href="/" className="text-xl font-bold"&gt;
          Blog App
        &lt;/Link&gt;

        &lt;div className="flex items-center gap-4"&gt;
          {isLoading ? (
            &lt;span&gt;読み込み中...&lt;/span&gt;
          ) : user ? (
            &lt;&gt;
              &lt;span className="text-gray-600"&gt;{user.name}&lt;/span&gt;
              &lt;Link
                href="/posts/new"
                className="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
              &gt;
                記事を書く
              &lt;/Link&gt;
              &lt;button
                onClick={logout}
                className="text-gray-600 hover:text-gray-900"
              &gt;
                ログアウト
              &lt;/button&gt;
            &lt;/&gt;
          ) : (
            &lt;&gt;
              &lt;Link href="/login" className="text-gray-600 hover:text-gray-900"&gt;
                ログイン
              &lt;/Link&gt;
              &lt;Link
                href="/register"
                className="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
              &gt;
                新規登録
              &lt;/Link&gt;
            &lt;/&gt;
          )}
        &lt;/div&gt;
      &lt;/nav&gt;
    &lt;/header&gt;
  );
}</pre>
                </div>
            </div>
        </section>

        <!-- 認証必須ページ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">認証必須ページの保護</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">components/RequireAuth.tsx</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>"use client";

import { useAuth } from "@/contexts/AuthContext";
import { useRouter } from "next/navigation";
import { useEffect } from "react";

export function RequireAuth({ children }: { children: React.ReactNode }) {
  const { user, isLoading } = useAuth();
  const router = useRouter();

  useEffect(() => {
    if (!isLoading && !user) {
      router.push("/login");
    }
  }, [user, isLoading, router]);

  if (isLoading) {
    return &lt;div className="text-center py-8"&gt;読み込み中...&lt;/div&gt;;
  }

  if (!user) {
    return null;
  }

  return &lt;&gt;{children}&lt;/&gt;;
}</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mt-6">
                <h3 class="font-bold mb-4">使用例: app/posts/new/page.tsx</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>"use client";

import { RequireAuth } from "@/components/RequireAuth";
import { PostForm } from "@/components/PostForm";

export default function NewPostPage() {
  return (
    &lt;RequireAuth&gt;
      &lt;div className="container mx-auto px-6 py-8"&gt;
        &lt;h1 className="text-2xl font-bold mb-6"&gt;新規記事作成&lt;/h1&gt;
        &lt;PostForm /&gt;
      &lt;/div&gt;
    &lt;/RequireAuth&gt;
  );
}</pre>
                </div>
            </div>
        </section>

        <!-- API呼び出し -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">認証付きAPI呼び出し</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">lib/api.ts</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>const API_URL = process.env.NEXT_PUBLIC_API_URL;

export async function fetchWithAuth(
  endpoint: string,
  options: RequestInit = {}
) {
  const token = localStorage.getItem("token");

  const headers: HeadersInit = {
    "Content-Type": "application/json",
    ...options.headers,
  };

  if (token) {
    headers["Authorization"] = `Bearer ${token}`;
  }

  const res = await fetch(`${API_URL}${endpoint}`, {
    ...options,
    headers,
  });

  if (res.status === 401) {
    // トークン期限切れ
    localStorage.removeItem("token");
    window.location.href = "/login";
    throw new Error("Unauthorized");
  }

  return res;
}

// 使用例
export async function createPost(title: string, content: string) {
  const res = await fetchWithAuth("/posts", {
    method: "POST",
    body: JSON.stringify({ title, content }),
  });

  if (!res.ok) {
    throw new Error("Failed to create post");
  }

  return res.json();
}</pre>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">まとめ</h2>
            <div class="bg-purple-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-purple-600 mr-2">✓</span>
                        <span>AuthContextでアプリ全体の認証状態を管理</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-600 mr-2">✓</span>
                        <span>localStorageにトークンを保存（ページリロード対応）</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-600 mr-2">✓</span>
                        <span>RequireAuthコンポーネントで認証必須ページを保護</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-600 mr-2">✓</span>
                        <span>API呼び出し時にAuthorizationヘッダーを付与</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="fastapi-auth.php" class="flex items-center text-gray-600 hover:text-purple-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                FastAPIで認証
            </a>
            <a href="state-management.php" class="flex items-center bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700">
                次へ：状態管理
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
