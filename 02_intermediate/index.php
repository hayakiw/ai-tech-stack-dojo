<?php
$page_title = 'AI×Web開発 中級編 | AI Tech Stack';
$current_page = 'home';
$extra_styles = '
        .gradient-text {
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
';
include 'includes/header.php';
?>

    <!-- ヒーローセクション -->
    <section class="gradient-bg text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <div class="text-sm mb-4 text-blue-300">初級編を修了した方向け</div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6">AI×Web開発 中級編</h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90">Docker・MySQL・認証を使った本格的なアプリ開発</p>
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <span class="bg-white/20 px-4 py-2 rounded-full">Docker</span>
                <span class="bg-white/20 px-4 py-2 rounded-full">MySQL</span>
                <span class="bg-white/20 px-4 py-2 rounded-full">JWT認証</span>
                <span class="bg-white/20 px-4 py-2 rounded-full">テスト</span>
                <span class="bg-white/20 px-4 py-2 rounded-full">デプロイ</span>
            </div>
            <a href="requirements.php" class="inline-block bg-white text-blue-900 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition">学習を始める</a>
        </div>
    </section>

    <!-- 前提知識 -->
    <section class="py-12 bg-yellow-50 border-b border-yellow-200">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-xl font-bold mb-4 text-yellow-800">前提知識</h2>
                <p class="text-yellow-700 mb-4">この中級編は、以下を理解している方を対象としています：</p>
                <div class="grid md:grid-cols-2 gap-4">
                    <ul class="list-disc list-inside text-yellow-700 space-y-1">
                        <li>HTML/CSS/JavaScriptの基礎</li>
                        <li>React/Next.jsの基本（useState, useEffect）</li>
                        <li>Python/FastAPIの基本</li>
                    </ul>
                    <ul class="list-disc list-inside text-yellow-700 space-y-1">
                        <li>簡単なCRUD APIの作成</li>
                        <li>Claude Code/Cursorの基本操作</li>
                        <li>ターミナルの基本コマンド</li>
                    </ul>
                </div>
                <p class="mt-4 text-yellow-600 text-sm">
                    まだの方は <a href="../01_beginner/index.php" class="underline font-bold">初級編</a> から始めてください。
                </p>
            </div>
        </div>
    </section>

    <!-- この編で学べること -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">この編で学べること</h2>
            <div class="grid md:grid-cols-4 gap-6">
                <div class="text-center p-6 rounded-lg bg-gray-50">
                    <div class="text-4xl mb-4">&#128051;</div>
                    <h3 class="text-lg font-bold mb-2">Docker</h3>
                    <p class="text-sm text-gray-600">開発環境をコンテナ化し、チームで同じ環境を共有</p>
                </div>
                <div class="text-center p-6 rounded-lg bg-gray-50">
                    <div class="text-4xl mb-4">&#128451;</div>
                    <h3 class="text-lg font-bold mb-2">MySQL</h3>
                    <p class="text-sm text-gray-600">本格的なデータベースでデータを永続化</p>
                </div>
                <div class="text-center p-6 rounded-lg bg-gray-50">
                    <div class="text-4xl mb-4">&#128272;</div>
                    <h3 class="text-lg font-bold mb-2">認証</h3>
                    <p class="text-sm text-gray-600">JWT/NextAuth.jsでログイン機能を実装</p>
                </div>
                <div class="text-center p-6 rounded-lg bg-gray-50">
                    <div class="text-4xl mb-4">&#128640;</div>
                    <h3 class="text-lg font-bold mb-2">デプロイ</h3>
                    <p class="text-sm text-gray-600">作ったアプリを本番環境に公開</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 学習ロードマップ -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">学習ロードマップ</h2>

            <!-- 第1部 -->
            <div class="mb-10">
                <h3 class="text-xl font-bold mb-4 text-blue-800">第1部：アプリケーション設計</h3>
                <div class="grid md:grid-cols-4 gap-4">
                    <a href="requirements.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 1</div>
                        <div class="font-bold">要件定義の方法</div>
                    </a>
                    <a href="component-design.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 2</div>
                        <div class="font-bold">コンポーネント設計</div>
                    </a>
                    <a href="api-design.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 3</div>
                        <div class="font-bold">API設計</div>
                    </a>
                    <a href="database-design.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 4</div>
                        <div class="font-bold">データベース設計</div>
                    </a>
                </div>
            </div>

            <!-- 第2部 -->
            <div class="mb-10">
                <h3 class="text-xl font-bold mb-4 text-cyan-800">第2部：Docker入門</h3>
                <div class="grid md:grid-cols-3 gap-4">
                    <a href="docker-intro.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 5</div>
                        <div class="font-bold">Dockerとは</div>
                    </a>
                    <a href="docker-basics.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 6</div>
                        <div class="font-bold">Docker基本操作</div>
                    </a>
                    <a href="docker-compose.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 7</div>
                        <div class="font-bold">Docker Compose</div>
                    </a>
                </div>
            </div>

            <!-- 第3部 -->
            <div class="mb-10">
                <h3 class="text-xl font-bold mb-4 text-green-800">第3部：MySQL連携</h3>
                <div class="grid md:grid-cols-3 gap-4">
                    <a href="mysql-intro.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 8</div>
                        <div class="font-bold">MySQL入門</div>
                    </a>
                    <a href="fastapi-mysql.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 9</div>
                        <div class="font-bold">FastAPI + MySQL</div>
                    </a>
                    <a href="migration.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 10</div>
                        <div class="font-bold">マイグレーション</div>
                    </a>
                </div>
            </div>

            <!-- 第4部 -->
            <div class="mb-10">
                <h3 class="text-xl font-bold mb-4 text-purple-800">第4部：認証機能</h3>
                <div class="grid md:grid-cols-3 gap-4">
                    <a href="auth-basics.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 11</div>
                        <div class="font-bold">認証の基礎</div>
                    </a>
                    <a href="fastapi-auth.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 12</div>
                        <div class="font-bold">FastAPIで認証</div>
                    </a>
                    <a href="nextjs-auth.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 13</div>
                        <div class="font-bold">Next.jsで認証</div>
                    </a>
                </div>
            </div>

            <!-- 第5部 -->
            <div class="mb-10">
                <h3 class="text-xl font-bold mb-4 text-pink-800">第5部：高度なフロントエンド</h3>
                <div class="grid md:grid-cols-3 gap-4">
                    <a href="state-management.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 14</div>
                        <div class="font-bold">状態管理</div>
                    </a>
                    <a href="form-handling.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 15</div>
                        <div class="font-bold">フォーム処理</div>
                    </a>
                    <a href="data-fetching.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 16</div>
                        <div class="font-bold">データフェッチ</div>
                    </a>
                </div>
            </div>

            <!-- 第6部 -->
            <div class="mb-10">
                <h3 class="text-xl font-bold mb-4 text-orange-800">第6部：品質と効率化</h3>
                <div class="grid md:grid-cols-3 gap-4">
                    <a href="error-handling.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 17</div>
                        <div class="font-bold">エラーハンドリング</div>
                    </a>
                    <a href="testing.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 18</div>
                        <div class="font-bold">テスト入門</div>
                    </a>
                    <a href="code-review.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 19</div>
                        <div class="font-bold">AIコードレビュー</div>
                    </a>
                </div>
            </div>

            <!-- 第7部 -->
            <div class="mb-10">
                <h3 class="text-xl font-bold mb-4 text-red-800">第7部：デプロイと運用</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <a href="env-config.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 20</div>
                        <div class="font-bold">環境変数と設定</div>
                    </a>
                    <a href="deployment.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 21</div>
                        <div class="font-bold">デプロイ実践</div>
                    </a>
                </div>
            </div>

            <!-- 第8部 -->
            <div>
                <h3 class="text-xl font-bold mb-4 text-indigo-800">第8部：実践プロジェクト - ブログアプリ</h3>
                <div class="grid md:grid-cols-3 gap-4">
                    <a href="blog-design.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition border-2 border-indigo-200">
                        <div class="text-sm text-gray-500 mb-1">Step 22</div>
                        <div class="font-bold">設計編</div>
                    </a>
                    <a href="blog-implementation.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition border-2 border-indigo-200">
                        <div class="text-sm text-gray-500 mb-1">Step 23</div>
                        <div class="font-bold">実装編</div>
                    </a>
                    <a href="blog-finishing.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition border-2 border-indigo-200">
                        <div class="text-sm text-gray-500 mb-1">Step 24</div>
                        <div class="font-bold">仕上げ編</div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 最終成果物 -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">最終成果物</h2>
            <div class="max-w-3xl mx-auto bg-gradient-to-r from-indigo-500 to-purple-500 text-white p-8 rounded-lg">
                <h3 class="text-2xl font-bold mb-4">認証付きブログアプリ</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-bold mb-2">機能</h4>
                        <ul class="text-sm space-y-1 opacity-90">
                            <li>&#10003; ユーザー登録・ログイン</li>
                            <li>&#10003; 記事の作成・編集・削除</li>
                            <li>&#10003; 記事一覧・詳細表示</li>
                            <li>&#10003; 自分の記事のみ編集可能</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold mb-2">技術スタック</h4>
                        <ul class="text-sm space-y-1 opacity-90">
                            <li>&#10003; Docker + Docker Compose</li>
                            <li>&#10003; MySQL + SQLAlchemy</li>
                            <li>&#10003; FastAPI + JWT認証</li>
                            <li>&#10003; Next.js + NextAuth.js</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 gradient-bg text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">本格的なアプリ開発を始めよう</h2>
            <p class="text-xl mb-8 opacity-90">AIと一緒に、プロレベルの開発スキルを身につけましょう</p>
            <a href="requirements.php" class="inline-block bg-white text-blue-900 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition">Step 1: 要件定義を学ぶ</a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
