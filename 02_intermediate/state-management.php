<?php
$page_title = '状態管理 - AI×Web開発 中級編 | AI Tech Stack';
$current_page = '';
$section_name = '第5部：高度なフロントエンド';
$step_number = 14;
$total_steps = 24;
$extra_styles = '
        .code-block {
            background: #1e293b;
            color: #e2e8f0;
        }
';
include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">状態管理</h1>

        <!-- イントロ -->
        <div class="bg-pink-50 border-l-4 border-pink-500 p-6 mb-8">
            <p class="text-lg">Reactの状態管理パターンを理解し、適切な方法を選択できるようになりましょう。</p>
        </div>

        <!-- 状態管理の種類 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-pink-200">状態の種類</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-blue-600">ローカル状態</h3>
                    <p class="text-sm mb-3">コンポーネント内でのみ使う状態</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・フォームの入力値</li>
                        <li>・モーダルの開閉</li>
                        <li>・ローディング状態</li>
                    </ul>
                    <p class="text-xs bg-blue-50 p-2 rounded mt-2">→ useState</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-green-600">グローバル状態</h3>
                    <p class="text-sm mb-3">複数コンポーネントで共有する状態</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・ログインユーザー情報</li>
                        <li>・テーマ設定</li>
                        <li>・ショッピングカート</li>
                    </ul>
                    <p class="text-xs bg-green-50 p-2 rounded mt-2">→ Context API / Zustand</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-purple-600">サーバー状態</h3>
                    <p class="text-sm mb-3">APIから取得するデータ</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・記事一覧</li>
                        <li>・ユーザープロフィール</li>
                        <li>・コメント</li>
                    </ul>
                    <p class="text-xs bg-purple-50 p-2 rounded mt-2">→ SWR / React Query</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-orange-600">URL状態</h3>
                    <p class="text-sm mb-3">URLに含まれる状態</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・検索クエリ</li>
                        <li>・ページ番号</li>
                        <li>・フィルター条件</li>
                    </ul>
                    <p class="text-xs bg-orange-50 p-2 rounded mt-2">→ useSearchParams</p>
                </div>
            </div>
        </section>

        <!-- useState -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-pink-200">useState（ローカル状態）</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>"use client";

import { useState } from "react";

export function Counter() {
  // 基本的な使い方
  const [count, setCount] = useState(0);

  // オブジェクトの場合
  const [form, setForm] = useState({
    title: "",
    content: "",
  });

  // 配列の場合
  const [items, setItems] = useState&lt;string[]&gt;([]);

  return (
    &lt;div&gt;
      &lt;p&gt;カウント: {count}&lt;/p&gt;
      &lt;button onClick={() =&gt; setCount(count + 1)}&gt;+1&lt;/button&gt;
      &lt;button onClick={() =&gt; setCount((prev) =&gt; prev - 1)}&gt;-1&lt;/button&gt;

      {/* オブジェクトの更新 */}
      &lt;input
        value={form.title}
        onChange={(e) =&gt; setForm({ ...form, title: e.target.value })}
      /&gt;

      {/* 配列への追加 */}
      &lt;button onClick={() =&gt; setItems([...items, "new"])}&gt;追加&lt;/button&gt;
    &lt;/div&gt;
  );
}</pre>
                </div>
            </div>
        </section>

        <!-- Context API -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-pink-200">Context API（グローバル状態）</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">contexts/ThemeContext.tsx</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>"use client";

import { createContext, useContext, useState, ReactNode } from "react";

type Theme = "light" | "dark";

type ThemeContextType = {
  theme: Theme;
  toggleTheme: () => void;
};

const ThemeContext = createContext&lt;ThemeContextType | undefined&gt;(undefined);

export function ThemeProvider({ children }: { children: ReactNode }) {
  const [theme, setTheme] = useState&lt;Theme&gt;("light");

  const toggleTheme = () => {
    setTheme((prev) =&gt; (prev === "light" ? "dark" : "light"));
  };

  return (
    &lt;ThemeContext.Provider value={{ theme, toggleTheme }}&gt;
      {children}
    &lt;/ThemeContext.Provider&gt;
  );
}

export function useTheme() {
  const context = useContext(ThemeContext);
  if (context === undefined) {
    throw new Error("useTheme must be used within a ThemeProvider");
  }
  return context;
}</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">使用例</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>"use client";

import { useTheme } from "@/contexts/ThemeContext";

export function ThemeToggle() {
  const { theme, toggleTheme } = useTheme();

  return (
    &lt;button onClick={toggleTheme}&gt;
      現在: {theme} | クリックで切り替え
    &lt;/button&gt;
  );
}</pre>
                </div>
            </div>
        </section>

        <!-- カスタムフック -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-pink-200">カスタムフック</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">hooks/useLocalStorage.ts</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>"use client";

import { useState, useEffect } from "react";

export function useLocalStorage&lt;T&gt;(key: string, initialValue: T) {
  // 初期値の設定
  const [storedValue, setStoredValue] = useState&lt;T&gt;(() =&gt; {
    if (typeof window === "undefined") {
      return initialValue;
    }
    try {
      const item = window.localStorage.getItem(key);
      return item ? JSON.parse(item) : initialValue;
    } catch (error) {
      console.error(error);
      return initialValue;
    }
  });

  // 値が変更されたらlocalStorageに保存
  useEffect(() =&gt; {
    try {
      window.localStorage.setItem(key, JSON.stringify(storedValue));
    } catch (error) {
      console.error(error);
    }
  }, [key, storedValue]);

  return [storedValue, setStoredValue] as const;
}

// 使用例
function App() {
  const [name, setName] = useLocalStorage("name", "");

  return (
    &lt;input value={name} onChange={(e) =&gt; setName(e.target.value)} /&gt;
  );
}</pre>
                </div>
            </div>
        </section>

        <!-- 状態管理の選び方 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-pink-200">状態管理の選び方</h2>

            <div class="bg-white p-6 rounded-lg shadow overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-pink-50">
                        <tr>
                            <th class="p-3 text-left">状況</th>
                            <th class="p-3 text-left">推奨</th>
                            <th class="p-3 text-left">理由</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="p-3">1つのコンポーネント内</td>
                            <td class="p-3 font-bold">useState</td>
                            <td class="p-3">シンプルで十分</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3">親子で共有</td>
                            <td class="p-3 font-bold">props</td>
                            <td class="p-3">明示的なデータフロー</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3">深い階層で共有</td>
                            <td class="p-3 font-bold">Context API</td>
                            <td class="p-3">バケツリレー回避</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3">複雑なグローバル状態</td>
                            <td class="p-3 font-bold">Zustand</td>
                            <td class="p-3">シンプルなAPI</td>
                        </tr>
                        <tr>
                            <td class="p-3">サーバーからのデータ</td>
                            <td class="p-3 font-bold">SWR / React Query</td>
                            <td class="p-3">キャッシュ・再検証が便利</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-pink-200">まとめ</h2>
            <div class="bg-pink-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-pink-600 mr-2">&#10003;</span>
                        <span>ローカル状態はuseState</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-pink-600 mr-2">&#10003;</span>
                        <span>グローバル状態はContext APIまたはZustand</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-pink-600 mr-2">&#10003;</span>
                        <span>サーバー状態はSWR/React Query</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-pink-600 mr-2">&#10003;</span>
                        <span>必要最小限の状態管理で始める</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="nextjs-auth.php" class="flex items-center text-gray-600 hover:text-pink-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Next.jsで認証
            </a>
            <a href="form-handling.php" class="flex items-center bg-pink-600 text-white px-6 py-3 rounded-lg hover:bg-pink-700">
                次へ：フォーム処理
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
