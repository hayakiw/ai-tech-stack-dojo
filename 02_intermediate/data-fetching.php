<?php
$page_title = 'データフェッチ - AI×Web開発 中級編 | AI Tech Stack';
$current_page = 'design';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
$section_name = '第5部：高度なフロントエンド';
$step_number = 16;
$total_steps = 24;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">データフェッチ</h1>

        <!-- イントロ -->
        <div class="bg-pink-50 border-l-4 border-pink-500 p-6 mb-8">
            <p class="text-lg">Next.jsでのデータ取得方法を学びます。サーバーコンポーネントとクライアントコンポーネントの使い分けがポイントです。</p>
        </div>

        <!-- Server Components -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-pink-200">サーバーコンポーネントでのフェッチ</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">app/posts/page.tsx（推奨）</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>// サーバーコンポーネント（デフォルト）
// "use client" を書かなければサーバーコンポーネント

type Post = {
  id: number;
  title: string;
  content: string;
};

async function getPosts(): Promise&lt;Post[]&gt; {
  const res = await fetch(`${process.env.API_URL}/posts`, {
    // キャッシュ戦略
    cache: "no-store",  // 常に最新を取得
    // または
    // next: { revalidate: 60 }  // 60秒ごとに再検証
  });

  if (!res.ok) {
    throw new Error("Failed to fetch posts");
  }

  return res.json();
}

export default async function PostsPage() {
  const posts = await getPosts();

  return (
    &lt;div className="container mx-auto px-6 py-8"&gt;
      &lt;h1 className="text-2xl font-bold mb-6"&gt;記事一覧&lt;/h1&gt;
      &lt;ul className="space-y-4"&gt;
        {posts.map((post) =&gt; (
          &lt;li key={post.id} className="bg-white p-4 rounded shadow"&gt;
            &lt;h2 className="font-bold"&gt;{post.title}&lt;/h2&gt;
            &lt;p className="text-gray-600"&gt;{post.content.slice(0, 100)}...&lt;/p&gt;
          &lt;/li&gt;
        ))}
      &lt;/ul&gt;
    &lt;/div&gt;
  );
}</pre>
                </div>
            </div>

            <div class="bg-green-50 border-l-4 border-green-500 p-4">
                <h3 class="font-bold text-green-700 mb-2">サーバーコンポーネントのメリット</h3>
                <ul class="text-sm text-green-600 space-y-1">
                    <li>・データ取得がサーバー側で完結（セキュア）</li>
                    <li>・初期表示が速い（クライアントJS不要）</li>
                    <li>・SEOに有利</li>
                </ul>
            </div>
        </section>

        <!-- Client Components with SWR -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-pink-200">クライアントコンポーネント + SWR</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">インストール</h3>
                <div class="code-block p-4 rounded font-mono text-sm">
                    npm install swr
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">components/PostList.tsx</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>"use client";

import useSWR from "swr";

type Post = {
  id: number;
  title: string;
  content: string;
};

const fetcher = (url: string) =&gt; fetch(url).then((res) =&gt; res.json());

export function PostList() {
  const { data, error, isLoading, mutate } = useSWR&lt;Post[]&gt;(
    `${process.env.NEXT_PUBLIC_API_URL}/posts`,
    fetcher
  );

  if (isLoading) return &lt;div&gt;読み込み中...&lt;/div&gt;;
  if (error) return &lt;div&gt;エラーが発生しました&lt;/div&gt;;
  if (!data) return null;

  return (
    &lt;div&gt;
      &lt;button
        onClick={() =&gt; mutate()}  // 手動で再取得
        className="mb-4 text-blue-600"
      &gt;
        更新
      &lt;/button&gt;

      &lt;ul className="space-y-4"&gt;
        {data.map((post) =&gt; (
          &lt;li key={post.id} className="bg-white p-4 rounded shadow"&gt;
            &lt;h2 className="font-bold"&gt;{post.title}&lt;/h2&gt;
          &lt;/li&gt;
        ))}
      &lt;/ul&gt;
    &lt;/div&gt;
  );
}</pre>
                </div>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                <h3 class="font-bold text-blue-700 mb-2">SWRの機能</h3>
                <ul class="text-sm text-blue-600 space-y-1">
                    <li>・自動キャッシュ</li>
                    <li>・フォーカス時の自動再検証</li>
                    <li>・エラー時の自動リトライ</li>
                    <li>・リアルタイム更新</li>
                </ul>
            </div>
        </section>

        <!-- 認証付きフェッチ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-pink-200">認証付きフェッチ</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>"use client";

import useSWR from "swr";
import { useAuth } from "@/contexts/AuthContext";

export function MyPosts() {
  const { token } = useAuth();

  const fetcher = (url: string) =&gt;
    fetch(url, {
      headers: { Authorization: `Bearer ${token}` },
    }).then((res) =&gt; {
      if (!res.ok) throw new Error("Fetch error");
      return res.json();
    });

  // tokenがある時だけフェッチ（nullを渡すとフェッチしない）
  const { data, error, isLoading } = useSWR(
    token ? `${process.env.NEXT_PUBLIC_API_URL}/posts/mine` : null,
    fetcher
  );

  if (!token) return &lt;div&gt;ログインしてください&lt;/div&gt;;
  if (isLoading) return &lt;div&gt;読み込み中...&lt;/div&gt;;
  if (error) return &lt;div&gt;エラーが発生しました&lt;/div&gt;;

  return (
    &lt;ul&gt;
      {data?.map((post: any) =&gt; (
        &lt;li key={post.id}&gt;{post.title}&lt;/li&gt;
      ))}
    &lt;/ul&gt;
  );
}</pre>
                </div>
            </div>
        </section>

        <!-- キャッシュ戦略 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-pink-200">キャッシュ戦略</h2>

            <div class="bg-white p-6 rounded-lg shadow overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-pink-50">
                        <tr>
                            <th class="p-3 text-left">設定</th>
                            <th class="p-3 text-left">動作</th>
                            <th class="p-3 text-left">用途</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="p-3 font-mono text-xs">cache: "force-cache"</td>
                            <td class="p-3">キャッシュを優先</td>
                            <td class="p-3">静的コンテンツ</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-mono text-xs">cache: "no-store"</td>
                            <td class="p-3">毎回取得</td>
                            <td class="p-3">リアルタイムデータ</td>
                        </tr>
                        <tr>
                            <td class="p-3 font-mono text-xs">next: { revalidate: 60 }</td>
                            <td class="p-3">60秒ごとに再検証</td>
                            <td class="p-3">ある程度新しさが必要</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- エラー処理 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-pink-200">エラー処理（error.tsx）</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">app/posts/error.tsx</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>"use client";

export default function Error({
  error,
  reset,
}: {
  error: Error;
  reset: () =&gt; void;
}) {
  return (
    &lt;div className="text-center py-8"&gt;
      &lt;h2 className="text-xl font-bold text-red-600 mb-4"&gt;
        エラーが発生しました
      &lt;/h2&gt;
      &lt;p className="text-gray-600 mb-4"&gt;{error.message}&lt;/p&gt;
      &lt;button
        onClick={reset}
        className="bg-blue-600 text-white px-4 py-2 rounded"
      &gt;
        もう一度試す
      &lt;/button&gt;
    &lt;/div&gt;
  );
}</pre>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-pink-200">まとめ</h2>
            <div class="bg-pink-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-pink-600 mr-2">✓</span>
                        <span>サーバーコンポーネントでの取得が基本（SEO、セキュリティ）</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-pink-600 mr-2">✓</span>
                        <span>インタラクティブな更新が必要ならSWR</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-pink-600 mr-2">✓</span>
                        <span>適切なキャッシュ戦略を選択</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-pink-600 mr-2">✓</span>
                        <span>error.tsxでエラー境界を設定</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="form-handling.php" class="flex items-center text-gray-600 hover:text-pink-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                フォーム処理
            </a>
            <a href="error-handling.php" class="flex items-center bg-pink-600 text-white px-6 py-3 rounded-lg hover:bg-pink-700">
                次へ：エラーハンドリング
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
