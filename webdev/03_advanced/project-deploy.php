<?php
$page_title = 'デプロイ・運用 - 実践プロジェクト - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'practice';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第9部：実践プロジェクト';
$step_number = 36;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">デプロイ・運用開始</h1>

        <div class="bg-purple-50 border-l-4 border-purple-500 p-6 mb-8">
            <p class="text-lg">アプリケーションを本番環境にデプロイし、運用を開始します。</p>
        </div>

        <!-- Section 1: デプロイ先 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">デプロイ先</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center mb-3">
                        <svg class="w-8 h-8 text-purple-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <h4 class="text-lg font-bold">Frontend: Vercel</h4>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>&#10003; Next.jsに最適化されたホスティング</li>
                        <li>&#10003; グローバルエッジネットワークで高速配信</li>
                        <li>&#10003; 自動HTTPS・SSL証明書</li>
                        <li>&#10003; GitHubと連携して自動デプロイ</li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center mb-3">
                        <svg class="w-8 h-8 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2"></path></svg>
                        <h4 class="text-lg font-bold">Backend: Railway</h4>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>&#10003; FastAPI + MySQL + Redisを一括管理</li>
                        <li>&#10003; GitHub連携で簡単デプロイ</li>
                        <li>&#10003; データベース・キャッシュをワンクリック追加</li>
                        <li>&#10003; 環境変数の安全な管理</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Section 2: Step 1 - 本番設定ファイルの準備 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">Step 1: 本番設定ファイルの準備</h2>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 rounded mb-6">
                <h4 class="font-bold mb-2">Claude Codeへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>TaskFlowの本番デプロイ用設定ファイルを生成してください。

【必要なファイル】
- vercel.json（フロントエンド設定）
- Procfile（Railway用）
- railway.toml（Railway設定）
- .env.production（バックエンド・フロントエンド）

本番環境に適したセキュリティ設定を含めてください。</pre>
                </div>
            </div>

            <h3 class="text-lg font-bold mb-3">vercel.json（フロントエンド）</h3>
            <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-6">
<pre>{
  <span class="text-green-400">// Vercel設定ファイル</span>
  "buildCommand": "npm run build",
  "outputDirectory": ".next",
  "rewrites": [
    {
      "source": "/api/:path*",
      "destination": "https://your-backend.railway.app/api/:path*"
    }
  ],
  "env": {
    "NEXT_PUBLIC_API_URL": "@api_url"
  },
  "headers": [
    {
      "source": "/(.*)",
      "headers": [
        { "key": "X-Frame-Options", "value": "DENY" },
        { "key": "X-Content-Type-Options", "value": "nosniff" }
      ]
    }
  ]
}</pre>
            </div>

            <h3 class="text-lg font-bold mb-3">Procfile（バックエンド）</h3>
            <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-6">
<pre>web: uvicorn app.main:app --host 0.0.0.0 --port $PORT</pre>
            </div>

            <h3 class="text-lg font-bold mb-3">railway.toml（バックエンド）</h3>
            <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-6">
<pre>[build]
builder = "nixpacks"

[deploy]
startCommand = "alembic upgrade head && uvicorn app.main:app --host 0.0.0.0 --port $PORT"
healthcheckPath = "/health"
healthcheckTimeout = 300
restartPolicyType = "on_failure"
restartPolicyMaxRetries = 3</pre>
            </div>

            <h3 class="text-lg font-bold mb-3">backend/.env.production（バックエンド環境変数テンプレート）</h3>
            <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-6">
<pre><span class="text-green-400"># データベース接続（RailwayのMySQL接続URLを使用）</span>
DATABASE_URL=mysql+asyncmy://user:password@host:port/dbname

<span class="text-green-400"># JWT認証用シークレットキー（必ずランダムな文字列に変更）</span>
SECRET_KEY=your-production-secret-key-change-this

<span class="text-green-400"># CORS設定（Vercelのドメインを指定）</span>
CORS_ORIGINS=https://your-app.vercel.app

<span class="text-green-400"># Redis接続URL（RailwayのRedis接続URLを使用）</span>
REDIS_URL=redis://default:password@host:port

<span class="text-green-400"># 環境設定</span>
ENVIRONMENT=production
DEBUG=false</pre>
            </div>

            <h3 class="text-lg font-bold mb-3">frontend/.env.production（フロントエンド環境変数テンプレート）</h3>
            <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-6">
<pre><span class="text-green-400"># バックエンドAPIのURL（RailwayのデプロイURLを指定）</span>
NEXT_PUBLIC_API_URL=https://your-backend.railway.app</pre>
            </div>
        </section>

        <!-- Section 3: Step 2 - Vercelへのフロントエンドデプロイ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">Step 2: Vercelへのフロントエンドデプロイ</h2>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 rounded mb-6">
                <h4 class="font-bold mb-2">Claude Codeへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>Vercelへのデプロイ手順を案内してください。
frontendディレクトリをVercelにデプロイします。
GitHubリポジトリ連携で自動デプロイを設定してください。</pre>
                </div>
            </div>

            <div class="space-y-4">
                <div class="bg-white p-5 rounded-lg shadow">
                    <h4 class="font-bold mb-2">1. GitHubにコードをプッシュ</h4>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># リポジトリにすべての変更をプッシュ</span>
git add .
git commit -m "prepare for production deployment"
git push origin main</pre>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-lg shadow">
                    <h4 class="font-bold mb-2">2. Vercelでプロジェクトをインポート</h4>
                    <p class="text-sm text-gray-600 mb-2">Vercelダッシュボード（vercel.com）にログインし、「Add New Project」からGitHubリポジトリをインポートします。</p>
                    <ul class="text-sm text-gray-600 space-y-1 ml-4">
                        <li>&#10003; Root Directoryを <code class="bg-gray-100 px-1 rounded">frontend</code> に設定</li>
                        <li>&#10003; Framework PresetがNext.jsになっていることを確認</li>
                    </ul>
                </div>

                <div class="bg-white p-5 rounded-lg shadow">
                    <h4 class="font-bold mb-2">3. 環境変数を設定</h4>
                    <p class="text-sm text-gray-600 mb-2">Vercelの「Settings > Environment Variables」で以下を設定します。</p>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># RailwayバックエンドのURLを指定</span>
NEXT_PUBLIC_API_URL = https://your-backend.railway.app</pre>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-lg shadow">
                    <h4 class="font-bold mb-2">4. デプロイ実行</h4>
                    <p class="text-sm text-gray-600 mb-2">CLIでデプロイする場合は以下のコマンドを実行します。</p>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># Vercel CLIをインストール</span>
npm i -g vercel

<span class="text-green-400"># frontendディレクトリでデプロイ</span>
cd frontend
vercel --prod</pre>
                    </div>
                </div>
            </div>

            <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded mt-6">
                <h4 class="font-bold mb-2">&#10003; 確認ポイント</h4>
                <p class="text-sm text-gray-700">VercelのURLにアクセスし、ページが正常に表示されることを確認してください。ビルドログにエラーがないことも確認しましょう。</p>
            </div>
        </section>

        <!-- Section 4: Step 3 - Railwayへのバックエンドデプロイ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">Step 3: Railwayへのバックエンドデプロイ</h2>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 rounded mb-6">
                <h4 class="font-bold mb-2">Claude Codeへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>Railwayへのバックエンドデプロイ手順を案内してください。
FastAPI + MySQL + Redisの構成です。
環境変数の設定とデータベースマイグレーションを含めてください。</pre>
                </div>
            </div>

            <div class="space-y-4">
                <div class="bg-white p-5 rounded-lg shadow">
                    <h4 class="font-bold mb-2">1. Railwayでプロジェクトを作成</h4>
                    <p class="text-sm text-gray-600">Railwayダッシュボード（railway.app）にログインし、「New Project」から「Deploy from GitHub repo」を選択してリポジトリを接続します。</p>
                </div>

                <div class="bg-white p-5 rounded-lg shadow">
                    <h4 class="font-bold mb-2">2. MySQLサービスを追加</h4>
                    <p class="text-sm text-gray-600 mb-2">プロジェクト内で「+ New」から「Database > MySQL」を選択して追加します。</p>
                    <ul class="text-sm text-gray-600 space-y-1 ml-4">
                        <li>&#10003; 自動的にDATABASE_URL環境変数が生成されます</li>
                        <li>&#10003; 接続情報はVariablesタブで確認できます</li>
                    </ul>
                </div>

                <div class="bg-white p-5 rounded-lg shadow">
                    <h4 class="font-bold mb-2">3. Redisサービスを追加</h4>
                    <p class="text-sm text-gray-600 mb-2">同様に「+ New」から「Database > Redis」を選択して追加します。</p>
                    <ul class="text-sm text-gray-600 space-y-1 ml-4">
                        <li>&#10003; 自動的にREDIS_URL環境変数が生成されます</li>
                        <li>&#10003; WebSocket通知やキャッシュに使用します</li>
                    </ul>
                </div>

                <div class="bg-white p-5 rounded-lg shadow">
                    <h4 class="font-bold mb-2">4. 環境変数を設定</h4>
                    <p class="text-sm text-gray-600 mb-2">バックエンドサービスの「Variables」タブで以下を設定します。</p>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># RailwayのMySQL接続URL（自動生成された値を参照）</span>
DATABASE_URL=${{MySQL.DATABASE_URL}}

<span class="text-green-400"># JWT認証用シークレットキー</span>
SECRET_KEY=<ランダムな文字列を生成して設定>

<span class="text-green-400"># CORS設定（Vercelのデプロイドメインを指定）</span>
CORS_ORIGINS=https://your-app.vercel.app

<span class="text-green-400"># Redis接続URL（自動生成された値を参照）</span>
REDIS_URL=${{Redis.REDIS_URL}}

<span class="text-green-400"># 環境設定</span>
ENVIRONMENT=production</pre>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-lg shadow">
                    <h4 class="font-bold mb-2">5. デプロイ実行</h4>
                    <p class="text-sm text-gray-600">環境変数を設定後、Railwayが自動的にビルド・デプロイを実行します。railway.tomlのstartCommandにより、マイグレーション実行後にサーバーが起動します。</p>
                </div>
            </div>

            <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded mt-6">
                <h4 class="font-bold mb-2">&#10003; 確認ポイント</h4>
                <p class="text-sm text-gray-700">RailwayのデプロイURLに <code class="bg-white px-1 rounded">/docs</code> を付けてアクセスし、Swagger UIが表示されることを確認してください。</p>
            </div>
        </section>

        <!-- Section 5: Step 4 - デプロイ後の動作確認 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">Step 4: デプロイ後の動作確認</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h4 class="font-bold mb-3 text-purple-700">フロントエンドの確認</h4>
                    <ul class="text-sm space-y-2">
                        <li>&#9745; VercelのURLにアクセスしてトップページが表示される</li>
                        <li>&#9745; ログインページ・登録ページが正しく表示される</li>
                        <li>&#9745; スマートフォン表示（レスポンシブ）が崩れていない</li>
                        <li>&#9745; ブラウザのコンソールにエラーが出ていない</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h4 class="font-bold mb-3 text-blue-700">バックエンドの確認</h4>
                    <ul class="text-sm space-y-2">
                        <li>&#9745; <code class="bg-gray-100 px-1 rounded">/docs</code> でSwagger UIが表示される</li>
                        <li>&#9745; <code class="bg-gray-100 px-1 rounded">/health</code> エンドポイントが正常応答を返す</li>
                        <li>&#9745; CORSが正しく動作している（フロントエンドからAPIを呼べる）</li>
                        <li>&#9745; データベース接続が正常に動作している</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h4 class="font-bold mb-3 text-green-700">認証フローの確認</h4>
                    <ul class="text-sm space-y-2">
                        <li>&#9745; 新規ユーザー登録ができる</li>
                        <li>&#9745; ログインしてトークンが取得できる</li>
                        <li>&#9745; 認証が必要なページにアクセスできる</li>
                        <li>&#9745; 未認証時にログインページへリダイレクトされる</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h4 class="font-bold mb-3 text-orange-700">機能テスト</h4>
                    <ul class="text-sm space-y-2">
                        <li>&#9745; プロジェクトを新規作成できる</li>
                        <li>&#9745; タスクを作成・編集・削除できる</li>
                        <li>&#9745; タスクのドラッグ&ドロップでステータスを変更できる</li>
                        <li>&#9745; 2つのブラウザタブでリアルタイム同期が動作する</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h4 class="font-bold mb-3 text-red-700">セキュリティ確認</h4>
                    <ul class="text-sm space-y-2">
                        <li>&#9745; HTTPSで通信されている（URLが https:// で始まる）</li>
                        <li>&#9745; 環境変数がフロントエンドに露出していない</li>
                        <li>&#9745; CORSが本番ドメインのみに制限されている</li>
                        <li>&#9745; APIレスポンスに不要な内部情報が含まれていない</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Section 6: 完成！おめでとうございます！ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">完成！</h2>
            <div class="bg-gradient-to-r from-purple-500 to-pink-500 text-white p-8 rounded-lg text-center">
                <h3 class="text-3xl font-bold mb-4">おめでとうございます！</h3>
                <p class="text-lg mb-6">AI駆動開発 上級編を完了しました。</p>
                <p class="mb-6">
                    TaskFlowプロジェクトを通じて、要件定義からデプロイまで、<br>
                    全工程をAIと協力して進める方法を学びました。
                </p>
                <div class="bg-white bg-opacity-20 rounded-lg p-6 text-left max-w-lg mx-auto">
                    <h4 class="font-bold text-center mb-4">習得したスキル</h4>
                    <ul class="space-y-2 text-sm">
                        <li>&#10003; AIを活用した要件定義・設計手法</li>
                        <li>&#10003; Next.js + FastAPIのフルスタック開発</li>
                        <li>&#10003; データベース設計とマイグレーション</li>
                        <li>&#10003; 認証・認可の実装</li>
                        <li>&#10003; WebSocketによるリアルタイム通信</li>
                        <li>&#10003; テスト戦略とCI/CDパイプライン構築</li>
                        <li>&#10003; 本番環境へのデプロイと運用</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Section 7: 次のステップ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">次のステップ</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div class="p-4 bg-purple-50 rounded">
                        <h4 class="font-bold mb-1">機能追加</h4>
                        <p class="text-sm text-gray-600">通知機能、高度なフィルター、全文検索、ファイル添付など、実務で求められる機能を追加して発展させましょう。</p>
                    </div>
                    <div class="p-4 bg-blue-50 rounded">
                        <h4 class="font-bold mb-1">パフォーマンス最適化</h4>
                        <p class="text-sm text-gray-600">Lighthouse分析、画像最適化、APIレスポンスのキャッシュ戦略、データベースクエリの最適化に取り組みましょう。</p>
                    </div>
                    <div class="p-4 bg-green-50 rounded">
                        <h4 class="font-bold mb-1">スケーリング対応</h4>
                        <p class="text-sm text-gray-600">ユーザー数の増加に備えて、負荷分散、データベースレプリケーション、CDN活用などを検討しましょう。</p>
                    </div>
                    <div class="p-4 bg-orange-50 rounded">
                        <h4 class="font-bold mb-1">他のプロジェクトで実践</h4>
                        <p class="text-sm text-gray-600">学んだAI駆動開発のワークフローを、ECサイト、SNS、SaaSなど別のプロジェクトで実践してスキルを定着させましょう。</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="project-testing.php" class="flex items-center text-gray-600 hover:text-purple-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                テスト・CI/CD
            </a>
            <a href="index.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                トップページへ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
            </a>
        </div>
    </main>


<?php include 'includes/footer.php'; ?>
