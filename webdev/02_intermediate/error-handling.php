<?php
$page_title = 'エラーハンドリング - AI×Web開発 中級編 | AI Tech Stack';
$current_page = 'design';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
$section_name = '第6部：品質と効率化';
$step_number = 17;
$total_steps = 24;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">エラーハンドリング</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">エラーは必ず起きるもの。適切に処理してユーザー体験を損なわないようにしましょう。</p>
        </div>

        <!-- FastAPIのエラー処理 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">FastAPIのエラー処理</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">HTTPException</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>from fastapi import FastAPI, HTTPException, status

app = FastAPI()

@app.get("/posts/{post_id}")
def get_post(post_id: int):
    post = db.query(Post).filter(Post.id == post_id).first()

    if not post:
        raise HTTPException(
            status_code=status.HTTP_404_NOT_FOUND,
            detail="Post not found"
        )

    return post


@app.post("/posts")
def create_post(post: PostCreate, current_user: User = Depends(get_current_user)):
    if not current_user:
        raise HTTPException(
            status_code=status.HTTP_401_UNAUTHORIZED,
            detail="Not authenticated",
            headers={"WWW-Authenticate": "Bearer"}
        )

    # 作成処理...
    return new_post</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">カスタム例外ハンドラー</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>from fastapi import FastAPI, Request
from fastapi.responses import JSONResponse

app = FastAPI()

# カスタム例外
class PostNotFoundError(Exception):
    def __init__(self, post_id: int):
        self.post_id = post_id

# 例外ハンドラー登録
@app.exception_handler(PostNotFoundError)
async def post_not_found_handler(request: Request, exc: PostNotFoundError):
    return JSONResponse(
        status_code=404,
        content={
            "error": "PostNotFound",
            "message": f"Post with id {exc.post_id} not found",
        }
    )

# バリデーションエラーのカスタマイズ
from fastapi.exceptions import RequestValidationError

@app.exception_handler(RequestValidationError)
async def validation_exception_handler(request: Request, exc: RequestValidationError):
    return JSONResponse(
        status_code=422,
        content={
            "error": "ValidationError",
            "details": exc.errors()
        }
    )</pre>
                </div>
            </div>
        </section>

        <!-- Next.jsのエラー処理 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Next.jsのエラー処理</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-4">error.tsx（エラー境界）</h3>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>"use client";

export default function Error({
  error,
  reset,
}: {
  error: Error & { digest?: string };
  reset: () => void;
}) {
  return (
    &lt;div className="min-h-screen flex items-center justify-center"&gt;
      &lt;div className="text-center"&gt;
        &lt;h2 className="text-2xl font-bold text-red-600 mb-4"&gt;
          問題が発生しました
        &lt;/h2&gt;
        &lt;p className="text-gray-600 mb-6"&gt;
          {error.message || "予期しないエラーが発生しました"}
        &lt;/p&gt;
        &lt;button
          onClick={reset}
          className="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700"
        &gt;
          もう一度試す
        &lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  );
}</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-4">not-found.tsx（404ページ）</h3>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>import Link from "next/link";

export default function NotFound() {
  return (
    &lt;div className="min-h-screen flex items-center justify-center"&gt;
      &lt;div className="text-center"&gt;
        &lt;h1 className="text-6xl font-bold text-gray-300 mb-4"&gt;404&lt;/h1&gt;
        &lt;h2 className="text-2xl font-bold mb-4"&gt;ページが見つかりません&lt;/h2&gt;
        &lt;p className="text-gray-600 mb-6"&gt;
          お探しのページは存在しないか、移動した可能性があります。
        &lt;/p&gt;
        &lt;Link
          href="/"
          className="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700"
        &gt;
          トップページへ
        &lt;/Link&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  );
}</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-4">notFound()の呼び出し</h3>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>import { notFound } from "next/navigation";

async function getPost(id: string) {
  const res = await fetch(`${API_URL}/posts/${id}`);

  if (res.status === 404) {
    notFound();  // not-found.tsx を表示
  }

  if (!res.ok) {
    throw new Error("Failed to fetch post");  // error.tsx を表示
  }

  return res.json();
}

export default async function PostPage({ params }: { params: { id: string } }) {
  const post = await getPost(params.id);

  return &lt;div&gt;{post.title}&lt;/div&gt;;
}</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- API呼び出しのエラー処理 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">API呼び出しのエラー処理</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>"use client";

import { useState } from "react";

export function CreatePostForm() {
  const [error, setError] = useState&lt;string | null&gt;(null);
  const [fieldErrors, setFieldErrors] = useState&lt;Record&lt;string, string&gt;&gt;({});

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setError(null);
    setFieldErrors({});

    try {
      const res = await fetch("/api/posts", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(formData),
      });

      if (!res.ok) {
        const data = await res.json();

        // バリデーションエラー
        if (res.status === 422) {
          const errors: Record&lt;string, string&gt; = {};
          data.details?.forEach((err: any) => {
            const field = err.loc[err.loc.length - 1];
            errors[field] = err.msg;
          });
          setFieldErrors(errors);
          return;
        }

        // 認証エラー
        if (res.status === 401) {
          setError("ログインが必要です");
          return;
        }

        // その他のエラー
        setError(data.message || "エラーが発生しました");
        return;
      }

      // 成功
      alert("投稿しました！");

    } catch (err) {
      // ネットワークエラーなど
      setError("通信エラーが発生しました。インターネット接続を確認してください。");
    }
  };

  return (
    &lt;form onSubmit={handleSubmit}&gt;
      {error && (
        &lt;div className="bg-red-100 text-red-700 p-3 rounded mb-4"&gt;
          {error}
        &lt;/div&gt;
      )}

      &lt;div&gt;
        &lt;input name="title" /&gt;
        {fieldErrors.title && (
          &lt;p className="text-red-500 text-sm"&gt;{fieldErrors.title}&lt;/p&gt;
        )}
      &lt;/div&gt;

      &lt;button type="submit"&gt;投稿&lt;/button&gt;
    &lt;/form&gt;
  );
}</pre>
                </div>
            </div>
        </section>

        <!-- ユーザーへの通知 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ユーザーフレンドリーなエラー表示</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-red-50 p-6 rounded-lg">
                    <h3 class="font-bold text-red-700 mb-3">悪い例</h3>
                    <ul class="text-sm text-red-600 space-y-2">
                        <li>✗ "Error: ECONNREFUSED"</li>
                        <li>✗ "500 Internal Server Error"</li>
                        <li>✗ "undefined is not a function"</li>
                    </ul>
                    <p class="text-xs text-gray-500 mt-3">技術的な内容は見せない</p>
                </div>
                <div class="bg-green-50 p-6 rounded-lg">
                    <h3 class="font-bold text-green-700 mb-3">良い例</h3>
                    <ul class="text-sm text-green-600 space-y-2">
                        <li>○ "通信エラーが発生しました"</li>
                        <li>○ "入力内容に誤りがあります"</li>
                        <li>○ "しばらく経ってから再度お試しください"</li>
                    </ul>
                    <p class="text-xs text-gray-500 mt-3">次のアクションを示す</p>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>FastAPIはHTTPExceptionで明示的にエラーを返す</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>Next.jsはerror.tsx, not-found.tsxでエラー画面を設定</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>API呼び出しはtry-catchで囲む</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>ユーザーには分かりやすいメッセージを表示</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="data-fetching.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                データフェッチ
            </a>
            <a href="testing.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：テスト入門
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
