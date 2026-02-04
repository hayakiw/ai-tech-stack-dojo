<?php
$page_title = 'デプロイ実践 - AI×Web開発 中級編 | AI Tech Stack';
$current_page = 'design';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
$section_name = '第7部：デプロイと運用';
$step_number = 21;
$total_steps = 24;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">デプロイ実践</h1>

        <!-- イントロ -->
        <div class="bg-red-50 border-l-4 border-red-500 p-6 mb-8">
            <p class="text-lg">作ったアプリを世界に公開！無料で始められるデプロイサービスを使って、本番環境を構築します。</p>
        </div>

        <!-- デプロイ先の選択 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-red-200">デプロイ先の選択肢</h2>

            <div class="bg-white p-6 rounded-lg shadow overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-red-50">
                        <tr>
                            <th class="p-3 text-left">サービス</th>
                            <th class="p-3 text-left">フロントエンド</th>
                            <th class="p-3 text-left">バックエンド</th>
                            <th class="p-3 text-left">データベース</th>
                            <th class="p-3 text-left">無料枠</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="p-3 font-bold">Vercel</td>
                            <td class="p-3">◎</td>
                            <td class="p-3">△（Serverless）</td>
                            <td class="p-3">×</td>
                            <td class="p-3">あり</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-bold">Railway</td>
                            <td class="p-3">○</td>
                            <td class="p-3">◎</td>
                            <td class="p-3">◎</td>
                            <td class="p-3">$5/月</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-bold">Render</td>
                            <td class="p-3">○</td>
                            <td class="p-3">◎</td>
                            <td class="p-3">◎</td>
                            <td class="p-3">あり</td>
                        </tr>
                        <tr>
                            <td class="p-3 font-bold">Fly.io</td>
                            <td class="p-3">○</td>
                            <td class="p-3">◎</td>
                            <td class="p-3">○</td>
                            <td class="p-3">あり</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mt-6">
                <p><strong>おすすめ構成：</strong>フロントエンドはVercel、バックエンド+DBはRailwayまたはRender</p>
            </div>
        </section>

        <!-- Vercel (Frontend) -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-red-200">Vercel（フロントエンド）</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">デプロイ手順</h3>
                <ol class="space-y-4">
                    <li class="flex gap-3">
                        <span class="bg-red-100 text-red-700 w-8 h-8 rounded-full flex items-center justify-center font-bold flex-shrink-0">1</span>
                        <div>
                            <p class="font-bold">GitHubにプッシュ</p>
                            <div class="code-block p-2 rounded font-mono text-xs mt-2">
                                git push origin main
                            </div>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <span class="bg-red-100 text-red-700 w-8 h-8 rounded-full flex items-center justify-center font-bold flex-shrink-0">2</span>
                        <div>
                            <p class="font-bold">Vercelにログイン</p>
                            <p class="text-sm text-gray-600">vercel.com でGitHubアカウントで登録</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <span class="bg-red-100 text-red-700 w-8 h-8 rounded-full flex items-center justify-center font-bold flex-shrink-0">3</span>
                        <div>
                            <p class="font-bold">Import Project</p>
                            <p class="text-sm text-gray-600">GitHubリポジトリを選択</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <span class="bg-red-100 text-red-700 w-8 h-8 rounded-full flex items-center justify-center font-bold flex-shrink-0">4</span>
                        <div>
                            <p class="font-bold">環境変数を設定</p>
                            <div class="code-block p-2 rounded font-mono text-xs mt-2">
                                NEXT_PUBLIC_API_URL=https://your-backend.railway.app
                            </div>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <span class="bg-red-100 text-red-700 w-8 h-8 rounded-full flex items-center justify-center font-bold flex-shrink-0">5</span>
                        <div>
                            <p class="font-bold">Deploy!</p>
                            <p class="text-sm text-gray-600">自動でビルド・デプロイされる</p>
                        </div>
                    </li>
                </ol>
            </div>
        </section>

        <!-- Railway (Backend) -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-red-200">Railway（バックエンド + DB）</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">1. MySQLをデプロイ</h3>
                <ol class="space-y-2 text-sm">
                    <li>1. New Project → Deploy MySQL</li>
                    <li>2. Variables タブで接続情報を確認</li>
                    <li>3. DATABASE_URL をコピー</li>
                </ol>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">2. FastAPIをデプロイ</h3>
                <ol class="space-y-2 text-sm">
                    <li>1. New → GitHub Repo</li>
                    <li>2. バックエンドのリポジトリを選択</li>
                    <li>3. 環境変数を設定：</li>
                </ol>
                <div class="code-block p-4 rounded font-mono text-xs mt-3 overflow-x-auto">
<pre>DATABASE_URL=mysql://...（MySQLからコピー）
SECRET_KEY=your-production-secret-key
CORS_ORIGINS=https://your-app.vercel.app</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">Dockerfile（Railway用）</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>FROM python:3.11-slim

WORKDIR /app

COPY requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

COPY . .

# マイグレーション実行
RUN alembic upgrade head

EXPOSE 8000

CMD ["uvicorn", "main:app", "--host", "0.0.0.0", "--port", "8000"]</pre>
                </div>
            </div>
        </section>

        <!-- デプロイ前チェック -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-red-200">デプロイ前チェックリスト</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <ul class="space-y-3">
                    <li class="flex items-center">
                        <span class="w-6 h-6 border-2 rounded mr-3"></span>
                        <span>環境変数は正しく設定されているか</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-6 h-6 border-2 rounded mr-3"></span>
                        <span>SECRET_KEYは本番用に変更したか</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-6 h-6 border-2 rounded mr-3"></span>
                        <span>CORSの設定は正しいか</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-6 h-6 border-2 rounded mr-3"></span>
                        <span>DEBUG=falseになっているか</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-6 h-6 border-2 rounded mr-3"></span>
                        <span>マイグレーションは実行されるか</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-6 h-6 border-2 rounded mr-3"></span>
                        <span>.envファイルはGit除外されているか</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- トラブルシューティング -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-red-200">よくあるトラブル</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-red-600 mb-2">ビルドエラー</h3>
                    <p class="text-sm text-gray-600">ログを確認。依存関係の不足、TypeScriptエラーが多い</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-red-600 mb-2">CORS エラー</h3>
                    <p class="text-sm text-gray-600">バックエンドのCORS_ORIGINSにフロントのURLを追加</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-red-600 mb-2">DB接続エラー</h3>
                    <p class="text-sm text-gray-600">DATABASE_URLが正しいか、DBが起動しているか確認</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-red-600 mb-2">500エラー</h3>
                    <p class="text-sm text-gray-600">ログを確認。環境変数の不足、マイグレーション未実行が多い</p>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-red-200">まとめ</h2>
            <div class="bg-red-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-red-600 mr-2">✓</span>
                        <span>フロントエンドはVercel、バックエンドはRailway/Render</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-600 mr-2">✓</span>
                        <span>環境変数は各プラットフォームで設定</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-600 mr-2">✓</span>
                        <span>Git pushで自動デプロイ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-600 mr-2">✓</span>
                        <span>エラーはログを確認して対処</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="env-config.php" class="flex items-center text-gray-600 hover:text-red-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                環境変数と設定
            </a>
            <a href="blog-design.php" class="flex items-center bg-red-600 text-white px-6 py-3 rounded-lg hover:bg-red-700">
                次へ：ブログアプリ設計編
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
