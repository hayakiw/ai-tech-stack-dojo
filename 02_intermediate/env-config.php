<?php
$page_title = '環境変数と設定 - AI×Web開発 中級編 | AI Tech Stack';
$current_page = 'design';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
$section_name = '第7部：デプロイと運用';
$step_number = 20;
$total_steps = 24;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">環境変数と設定</h1>

        <!-- イントロ -->
        <div class="bg-red-50 border-l-4 border-red-500 p-6 mb-8">
            <p class="text-lg">環境変数を使って、開発・本番で異なる設定を管理。セキュリティと柔軟性を両立させます。</p>
        </div>

        <!-- なぜ環境変数か -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-red-200">なぜ環境変数を使うのか</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-red-50 p-6 rounded-lg">
                    <h3 class="font-bold text-red-700 mb-3">コードに直書きのリスク</h3>
                    <ul class="space-y-2 text-sm text-red-600">
                        <li>✗ パスワードがGitに残る</li>
                        <li>✗ 本番/開発の切り替えが面倒</li>
                        <li>✗ 設定変更にデプロイが必要</li>
                    </ul>
                </div>
                <div class="bg-green-50 p-6 rounded-lg">
                    <h3 class="font-bold text-green-700 mb-3">環境変数のメリット</h3>
                    <ul class="space-y-2 text-sm text-green-600">
                        <li>○ 機密情報をコードから分離</li>
                        <li>○ 環境ごとに値を変えられる</li>
                        <li>○ 設定変更が容易</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- FastAPI -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-red-200">FastAPI での設定管理</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">.env ファイル</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># .env
DATABASE_URL=mysql+pymysql://user:password@localhost:3306/blog
SECRET_KEY=your-super-secret-key-change-in-production
DEBUG=true
CORS_ORIGINS=http://localhost:3000</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">config.py（pydantic-settings使用）</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>from pydantic_settings import BaseSettings
from functools import lru_cache

class Settings(BaseSettings):
    # データベース
    database_url: str

    # セキュリティ
    secret_key: str
    algorithm: str = "HS256"
    access_token_expire_minutes: int = 30

    # その他
    debug: bool = False
    cors_origins: str = "http://localhost:3000"

    @property
    def cors_origins_list(self) -> list[str]:
        return [origin.strip() for origin in self.cors_origins.split(",")]

    class Config:
        env_file = ".env"

@lru_cache()
def get_settings():
    return Settings()

settings = get_settings()</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">使用例</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>from config import settings

# データベース接続
engine = create_engine(settings.database_url)

# JWT生成
jwt.encode(data, settings.secret_key, algorithm=settings.algorithm)

# CORS設定
app.add_middleware(
    CORSMiddleware,
    allow_origins=settings.cors_origins_list,
)</pre>
                </div>
            </div>
        </section>

        <!-- Next.js -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-red-200">Next.js での環境変数</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">.env.local（開発用）</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># .env.local
# ブラウザで使用する変数は NEXT_PUBLIC_ プレフィックス必須
NEXT_PUBLIC_API_URL=http://localhost:8000

# サーバーサイドのみで使用
API_SECRET_KEY=server-side-only-key</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">使用例</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>// クライアントサイド（NEXT_PUBLIC_ が必要）
const apiUrl = process.env.NEXT_PUBLIC_API_URL;
fetch(`${apiUrl}/posts`);

// サーバーサイド（Server Component / API Route）
const secretKey = process.env.API_SECRET_KEY;</pre>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>注意：</strong><code>NEXT_PUBLIC_</code>の変数はブラウザに露出します。機密情報には使わないでください。</p>
            </div>
        </section>

        <!-- 環境ごとの設定 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-red-200">環境ごとの設定ファイル</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># ファイル構成
.env                 # 共通（Gitにコミット可）
.env.local           # ローカル開発（Git除外）
.env.development     # 開発環境
.env.production      # 本番環境

# .gitignore に追加
.env.local
.env.*.local</pre>
                </div>

                <div class="mt-6">
                    <h3 class="font-bold mb-3">優先順位（Next.js）</h3>
                    <ol class="text-sm space-y-1">
                        <li>1. <code>.env.local</code>（最優先）</li>
                        <li>2. <code>.env.[environment]</code></li>
                        <li>3. <code>.env</code></li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Docker Compose -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-red-200">Docker Compose での環境変数</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># compose.yaml
services:
  backend:
    build: ./backend
    env_file:
      - ./backend/.env
    environment:
      - DATABASE_URL=${DATABASE_URL}  # .envから参照

  frontend:
    build: ./frontend
    env_file:
      - ./frontend/.env.local
    environment:
      - NEXT_PUBLIC_API_URL=http://backend:8000</pre>
                </div>
            </div>
        </section>

        <!-- 本番環境での管理 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-red-200">本番環境での管理</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">各種プラットフォーム</h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start">
                        <span class="font-bold w-24">Vercel:</span>
                        <span>Project Settings → Environment Variables</span>
                    </li>
                    <li class="flex items-start">
                        <span class="font-bold w-24">Railway:</span>
                        <span>Variables タブ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="font-bold w-24">AWS:</span>
                        <span>Systems Manager Parameter Store / Secrets Manager</span>
                    </li>
                    <li class="flex items-start">
                        <span class="font-bold w-24">Render:</span>
                        <span>Environment → Environment Variables</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-red-200">まとめ</h2>
            <div class="bg-red-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-red-600 mr-2">✓</span>
                        <span>機密情報は必ず環境変数で管理</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-600 mr-2">✓</span>
                        <span><code class="bg-white px-1 rounded">.env.local</code>はGitにコミットしない</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-600 mr-2">✓</span>
                        <span>Next.jsで公開する変数は<code class="bg-white px-1 rounded">NEXT_PUBLIC_</code>プレフィックス</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-600 mr-2">✓</span>
                        <span>本番環境はプラットフォームの管理機能を使う</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="code-review.php" class="flex items-center text-gray-600 hover:text-red-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                AIコードレビュー
            </a>
            <a href="deployment.php" class="flex items-center bg-red-600 text-white px-6 py-3 rounded-lg hover:bg-red-700">
                次へ：デプロイ実践
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
