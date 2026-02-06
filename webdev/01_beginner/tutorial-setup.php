<?php
$page_title = 'チュートリアル準備 - AIでWebアプリ開発を学ぼう | AI Tech Stack';
$current_page = 'tutorial';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
$section_name = '第3部：実践チュートリアル';
$step_number = 12;
$total_steps = 20;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">チュートリアル準備</h1>

        <!-- イントロ -->
        <div class="bg-green-50 border-l-4 border-green-500 p-6 mb-8">
            <p class="text-lg">いよいよ実践編です！このページでは、Claude Codeを使ってNext.jsとFastAPIのプロジェクトを作成します。Claude Codeに指示を出すだけで、必要なファイルやフォルダがすべて自動で作られます。</p>
        </div>

        <!-- 作成するプロジェクト -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">作成するプロジェクト</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-blue-50 p-6 rounded-lg">
                    <h3 class="text-xl font-bold mb-3 text-blue-700">フロントエンド</h3>
                    <ul class="list-disc list-inside text-sm space-y-1">
                        <li>Next.js（App Router）</li>
                        <li>TypeScript</li>
                        <li>Tailwind CSS</li>
                    </ul>
                    <p class="mt-3 text-sm text-gray-600">ポート: 3000</p>
                </div>
                <div class="bg-green-50 p-6 rounded-lg">
                    <h3 class="text-xl font-bold mb-3 text-green-700">バックエンド</h3>
                    <ul class="list-disc list-inside text-sm space-y-1">
                        <li>FastAPI</li>
                        <li>Python 3.x</li>
                        <li>uvicorn（開発サーバー）</li>
                    </ul>
                    <p class="mt-3 text-sm text-gray-600">ポート: 8000</p>
                </div>
            </div>
        </section>

        <!-- Step 1: フォルダ作成とClaude Code起動 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">1. 作業フォルダの作成とClaude Codeの起動</h2>

            <p class="mb-4">まずターミナル（コマンドプロンプト）で作業フォルダを作り、そこでClaude Codeを起動します。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">Step 1-1: フォルダを作成して移動</h3>
                <div class="code-block p-4 rounded font-mono text-sm">
<pre><span class="text-gray-400"># フォルダを作成して移動</span>
mkdir ai-todo-app
cd ai-todo-app</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">Step 1-2: Claude Codeを起動</h3>
                <div class="code-block p-4 rounded font-mono text-sm">
<pre>claude</pre>
                </div>
                <p class="text-sm text-gray-600 mt-3">Claude Codeが起動し、プロンプト（入力待ち画面）が表示されます。ここからはClaude Codeの画面で指示を入力していきます。</p>
            </div>

            <div class="bg-purple-50 border-l-4 border-purple-500 p-4">
                <p class="text-sm"><strong>Claude Codeとは？</strong> ターミナルで動くAIアシスタントです。自然な日本語で指示を出すと、ファイルの作成・コマンドの実行・コードの記述をすべて自動で行ってくれます。</p>
            </div>
        </section>

        <!-- Step 2: Next.jsプロジェクト作成 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">2. Next.jsプロジェクトの作成（Claude Codeで実行）</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">Step 2-1: Claude Codeに以下の指示を入力</h3>
                <div class="bg-indigo-50 border border-indigo-200 p-4 rounded font-mono text-sm">
<pre>Next.jsプロジェクトを「frontend」というフォルダ名で作成してください。

設定：
- TypeScript: Yes
- Tailwind CSS: Yes
- App Router: Yes
- src/ ディレクトリ: Yes
- ESLint: Yes
- import alias: デフォルト（カスタマイズしない）</pre>
                </div>
                <p class="text-sm text-gray-600 mt-3">Claude Codeは <code class="bg-gray-100 px-1 rounded">npx create-next-app@latest frontend</code> を実行しようとします。</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">Step 2-2: コマンド実行の許可</h3>
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4">
                    <p class="text-sm mb-2"><strong>重要：</strong>Claude Codeがコマンドを実行する前に、確認メッセージが表示されます。</p>
                    <div class="code-block p-3 rounded font-mono text-xs mt-2">
<pre><span class="text-gray-400">Claude wants to execute:</span>
npx create-next-app@latest frontend --typescript --tailwind --eslint --app --src-dir --no-import-alias

<span class="text-gray-400">Allow? (y/n)</span></pre>
                    </div>
                    <p class="text-sm mt-2"><strong>「y」を押してEnter</strong>で実行を許可します。内容を確認してから許可する習慣をつけましょう。</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">Step 2-3: 完了を確認</h3>
                <p class="text-sm text-gray-600 mb-3">Claude Codeが自動的にプロジェクトを作成します。完了すると以下のようなメッセージが表示されます：</p>
                <div class="bg-green-50 border border-green-200 p-4 rounded text-sm">
                    <p>「frontendフォルダにNext.jsプロジェクトを作成しました。TypeScript、Tailwind CSS、App Routerが設定されています。」</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">Step 2-4: 動作確認</h3>
                <p class="text-sm text-gray-600 mb-3">Claude Codeに動作確認も頼めます：</p>
                <div class="bg-indigo-50 border border-indigo-200 p-4 rounded font-mono text-sm mb-3">
<pre>frontendフォルダに移動して、開発サーバーを起動してください。</pre>
                </div>
                <p class="text-sm text-gray-600 mb-2">または、自分でターミナルを<strong>別のウィンドウで</strong>開いて手動で確認することもできます：</p>
                <div class="code-block p-3 rounded font-mono text-sm">
<pre>cd frontend
npm run dev</pre>
                </div>
                <p class="text-sm text-gray-600 mt-3">
                    ブラウザで <a href="http://localhost:3000" class="text-blue-600 hover:underline">http://localhost:3000</a> を開いて、Next.jsのページが表示されればOK！
                </p>
                <p class="text-sm text-red-500 mt-2"><strong>確認が終わったら Ctrl+C でサーバーを停止</strong>してから次のステップに進みましょう。</p>
            </div>
        </section>

        <!-- Step 3: FastAPIプロジェクト作成 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">3. FastAPIプロジェクトの作成（Claude Codeで実行）</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">Step 3-1: Claude Codeに以下の指示を入力</h3>
                <div class="bg-indigo-50 border border-indigo-200 p-4 rounded font-mono text-sm">
<pre>ai-todo-appフォルダの直下に、FastAPIプロジェクトを作成してください。

要件：
- フォルダ名: backend
- Python仮想環境（venv）を作成して有効化
- fastapi と uvicorn をインストール
- main.py を作成し、以下を含める：
  - Hello Worldのエンドポイント（GET /）
  - CORSの設定（http://localhost:3000 からのアクセスを許可）</pre>
                </div>
                <p class="text-sm text-gray-600 mt-3">Claude Codeが以下の作業を自動で行います。</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">Step 3-2: Claude Codeが行う処理（自動）</h3>
                <p class="text-sm text-gray-600 mb-3">Claude Codeは以下のステップを順番に実行します。各コマンドの実行前に許可を求められるので、内容を確認して「y」で許可してください。</p>
                <div class="space-y-3">
                    <div class="flex items-start gap-3">
                        <span class="bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded mt-0.5">1</span>
                        <div>
                            <p class="text-sm font-semibold">backendフォルダを作成</p>
                            <code class="text-xs bg-gray-100 px-2 py-0.5 rounded">mkdir backend</code>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded mt-0.5">2</span>
                        <div>
                            <p class="text-sm font-semibold">Python仮想環境を作成</p>
                            <code class="text-xs bg-gray-100 px-2 py-0.5 rounded">python -m venv backend/venv</code>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded mt-0.5">3</span>
                        <div>
                            <p class="text-sm font-semibold">パッケージをインストール</p>
                            <code class="text-xs bg-gray-100 px-2 py-0.5 rounded">pip install fastapi uvicorn</code>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded mt-0.5">4</span>
                        <div>
                            <p class="text-sm font-semibold">main.pyを自動作成</p>
                            <p class="text-xs text-gray-500">CORSの設定やエンドポイントも含めて書いてくれます</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">Step 3-3: 作成されるmain.pyの内容</h3>
                <p class="text-sm text-gray-600 mb-3">Claude Codeが自動で作成するmain.pyは、以下のような内容になります：</p>
                <div class="code-block p-4 rounded font-mono text-sm">
<pre><span class="text-purple-400">from</span> fastapi <span class="text-purple-400">import</span> FastAPI
<span class="text-purple-400">from</span> fastapi.middleware.cors <span class="text-purple-400">import</span> CORSMiddleware

app = FastAPI()

<span class="text-gray-400"># CORSの設定（フロントエンドからのアクセスを許可）</span>
app.add_middleware(
    CORSMiddleware,
    allow_origins=[<span class="text-green-400">"http://localhost:3000"</span>],
    allow_credentials=<span class="text-purple-400">True</span>,
    allow_methods=[<span class="text-green-400">"*"</span>],
    allow_headers=[<span class="text-green-400">"*"</span>],
)

<span class="text-pink-400">@app.get</span>(<span class="text-green-400">"/"</span>)
<span class="text-purple-400">def</span> <span class="text-blue-400">read_root</span>():
    <span class="text-purple-400">return</span> {<span class="text-green-400">"message"</span>: <span class="text-green-400">"Hello from FastAPI!"</span>}</pre>
                </div>
                <p class="text-sm text-gray-500 mt-2">自分で書く必要はありません。Claude Codeが指示に基づいて自動で作成します。</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">Step 3-4: 動作確認</h3>
                <p class="text-sm text-gray-600 mb-3">Claude Codeに動作確認を頼めます：</p>
                <div class="bg-indigo-50 border border-indigo-200 p-4 rounded font-mono text-sm mb-3">
<pre>backendの開発サーバーを起動して動作確認してください。</pre>
                </div>
                <p class="text-sm text-gray-600 mb-2">または、自分でターミナルを<strong>別のウィンドウで</strong>開いて確認：</p>
                <div class="code-block p-3 rounded font-mono text-sm">
<pre><span class="text-gray-400"># backendフォルダに移動</span>
cd backend

<span class="text-gray-400"># 仮想環境を有効化</span>
<span class="text-gray-400"># Windows:</span>
venv\Scripts\activate
<span class="text-gray-400"># Mac/Linux:</span>
source venv/bin/activate

<span class="text-gray-400"># サーバーを起動</span>
uvicorn main:app --reload</pre>
                </div>
                <p class="text-sm text-gray-600 mt-3">
                    ブラウザで <a href="http://localhost:8000" class="text-blue-600 hover:underline">http://localhost:8000</a> を開いて、<code class="bg-gray-100 px-1 rounded">{"message":"Hello from FastAPI!"}</code> が表示されればOK！
                </p>
                <p class="text-sm text-gray-600 mt-2">
                    <a href="http://localhost:8000/docs" class="text-blue-600 hover:underline">http://localhost:8000/docs</a> でAPIドキュメント（自動生成）も確認できます。
                </p>
            </div>
        </section>

        <!-- フォルダ構成 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">4. 完成後のフォルダ構成</h2>

            <p class="text-sm text-gray-600 mb-4">ここまでの手順が完了すると、以下のフォルダ構成になっています。Claude Codeに「フォルダ構成を表示して」と頼めば確認できます。</p>

            <div class="bg-white p-6 rounded-lg shadow font-mono text-sm">
<pre>ai-todo-app/
├── frontend/          <span class="text-gray-400"># Next.jsプロジェクト</span>
│   ├── src/
│   │   ├── app/
│   │   │   ├── page.tsx
│   │   │   └── layout.tsx
│   │   └── components/  <span class="text-gray-400"># コンポーネント用（後で作成）</span>
│   ├── package.json
│   └── ...
│
└── backend/           <span class="text-gray-400"># FastAPIプロジェクト</span>
    ├── main.py
    ├── venv/          <span class="text-gray-400"># 仮想環境</span>
    └── ...</pre>
            </div>
        </section>

        <!-- 開発時のコマンド -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">5. 開発時に使うコマンド</h2>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 mb-6">
                <p><strong>重要：</strong>開発中はフロントエンドとバックエンドの両方のサーバーを起動しておく必要があります。ターミナルを2つ開いて、それぞれで起動してください。</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-blue-600">ターミナル1: フロントエンド</h3>
                    <div class="code-block p-3 rounded font-mono text-sm">
<pre>cd frontend
npm run dev</pre>
                    </div>
                    <p class="text-sm text-gray-600 mt-2">→ http://localhost:3000</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-green-600">ターミナル2: バックエンド</h3>
                    <div class="code-block p-3 rounded font-mono text-sm">
<pre>cd backend
<span class="text-gray-400"># Windows:</span>
venv\Scripts\activate
<span class="text-gray-400"># Mac/Linux:</span>
source venv/bin/activate

uvicorn main:app --reload</pre>
                    </div>
                    <p class="text-sm text-gray-600 mt-2">→ http://localhost:8000</p>
                </div>
            </div>

            <div class="mt-6 p-4 bg-blue-50 border-l-4 border-blue-500 rounded">
                <p><strong>ヒント：</strong>VS CodeやCursorでは「ターミナルの分割」機能で2つ同時に表示できます。さらに3つ目のターミナルでClaude Codeを起動すれば、開発サーバーを動かしながらAIに指示を出せます。</p>
            </div>
        </section>

        <!-- Claude Codeでの開発のコツ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">6. Claude Codeを使うときのコツ</h2>

            <div class="space-y-4">
                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-indigo-700">具体的に指示を出す</h3>
                    <div class="grid md:grid-cols-2 gap-4 text-sm">
                        <div class="bg-red-50 p-3 rounded">
                            <p class="font-semibold text-red-600 mb-1">悪い例</p>
                            <p class="font-mono text-xs">プロジェクトを作って</p>
                        </div>
                        <div class="bg-green-50 p-3 rounded">
                            <p class="font-semibold text-green-600 mb-1">良い例</p>
                            <p class="font-mono text-xs">Next.jsプロジェクトをfrontendフォルダに作成して。TypeScript、Tailwind CSS、App Routerを使う。</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-indigo-700">コマンド実行の許可は必ず内容を確認</h3>
                    <p class="text-sm text-gray-600">Claude Codeがコマンドを実行する前に許可を求めてきます。表示されるコマンドが意図したものか確認してから「y」を押しましょう。意図しないコマンドの場合は「n」で拒否できます。</p>
                </div>

                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-indigo-700">エラーが出たらそのまま伝える</h3>
                    <p class="text-sm text-gray-600">エラーが出た場合、Claude Codeが自動的に対処してくれることがほとんどです。自動で解決しない場合は「エラーが出ました」とそのまま伝えれば、原因を分析して修正してくれます。</p>
                </div>

                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-indigo-700">作業の確認もAIに頼める</h3>
                    <p class="text-sm text-gray-600 mb-2">ファイルが正しく作られたか不安なときは、Claude Codeに確認を頼めます：</p>
                    <div class="bg-indigo-50 border border-indigo-200 p-3 rounded font-mono text-xs">
<pre>frontend と backend のフォルダ構成を表示して、
正しくセットアップされているか確認してください。</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- 準備完了 -->
        <div class="bg-green-100 border border-green-300 rounded-lg p-6 mb-8">
            <h3 class="text-xl font-bold text-green-700 mb-2">準備完了！</h3>
            <p class="text-green-600">これでチュートリアルの準備が整いました。次のページから、Claude Codeと一緒に実際にTodoアプリを作っていきます！</p>
        </div>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="dev-flow.php" class="flex items-center text-gray-600 hover:text-green-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AIとの開発フロー
            </a>
            <a href="tutorial-counter.php" class="flex items-center bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">
                次へ：カウンターアプリを作る
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>


<?php include 'includes/footer.php'; ?>
