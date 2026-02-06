<?php
$page_title = 'アーキテクチャ決定 - 実践プロジェクト - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'practice';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第9部：実践プロジェクト';
$step_number = 32;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">アーキテクチャ決定</h1>

        <div class="bg-purple-50 border-l-4 border-purple-500 p-6 mb-8">
            <p class="text-lg">AIと技術選定を行い、プロジェクトのアーキテクチャを決定します。</p>
        </div>

        <!-- Claude Codeでプロジェクト初期化 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">Claude Codeでプロジェクト初期化</h2>

            <p class="mb-4">まずはプロジェクトフォルダを作成し、Claude Codeを起動します。ターミナルで以下を実行してください。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">Step 1: フォルダ作成とClaude Code起動</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># プロジェクトフォルダを作成して移動</span>
mkdir taskflow
cd taskflow

<span class="text-green-400"># Claude Codeを起動</span>
claude</pre>
                </div>
                <p class="text-sm text-gray-600 mt-3">Claude Codeが起動したら、以下の指示でプロジェクトの骨組みを一括作成します。</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">Step 2: プロジェクトのスキャフォールド</h3>
                <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 rounded">
                    <h4 class="font-bold text-indigo-700 mb-2">Claude Codeへの指示</h4>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>TaskFlowプロジェクトのスキャフォールドを作成してください。

【プロジェクト概要】
カンバン形式のプロジェクト管理ツール。リアルタイム同期対応。

【技術スタック】
- Frontend: Next.js 14（App Router, TypeScript, Tailwind CSS）
- Backend: FastAPI（Python 3.11+）
- DB: MySQL 8
- キャッシュ/WebSocket: Redis
- コンテナ: Docker Compose

【作成してほしいもの】
1. frontend/ - Next.jsプロジェクト（create-next-app）
2. backend/ - FastAPIプロジェクト（ディレクトリ構成のみ）
3. docker-compose.yml - 全サービスの定義
4. .gitignore - Python, Node.js, Docker用

まずディレクトリ構成だけ作成し、
中身の実装は次のステップで行います。</pre>
                    </div>
                </div>
                <p class="text-sm text-gray-600 mt-3">Claude Codeが <code class="bg-gray-100 px-1 rounded">npx create-next-app</code> などのコマンドを実行しようとします。内容を確認して「y」で許可してください。</p>
            </div>
        </section>

        <!-- 技術選定の理由 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">技術選定の理由</h2>

            <p class="mb-6">アーキテクチャの各決定には明確な理由があります。「なぜこれを選ぶのか」を理解しておくことで、AIへの指示もより的確になります。</p>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-6">
                    <div class="p-4 bg-gray-50 rounded">
                        <h4 class="font-bold mb-2">&#10003; リアルタイム通信: WebSocket</h4>
                        <p class="text-sm text-gray-600 mb-3">双方向通信が必要なため、WebSocketを採用。FastAPIの組み込みWebSocketを使用します。</p>
                        <div class="text-sm">
                            <p class="font-semibold mb-1">なぜこれを選ぶ？</p>
                            <ul class="space-y-1 text-gray-600">
                                <li>・<strong>SSE（Server-Sent Events）</strong> - サーバーからクライアントへの一方向通信のみ。タスクの移動やコメントなど、クライアントからの送信も即時反映したいため不向き。</li>
                                <li>・<strong>ポーリング</strong> - 定期的にAPIを叩く方式。リアルタイム性が低く、同時接続100人規模ではサーバー負荷が大きい。</li>
                                <li>・<strong>WebSocket</strong> - 双方向・低レイテンシ。カンバンのドラッグ&ドロップをリアルタイムで他ユーザーに反映するのに最適。</li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-4 bg-gray-50 rounded">
                        <h4 class="font-bold mb-2">&#10003; 状態管理: Zustand + TanStack Query</h4>
                        <p class="text-sm text-gray-600 mb-3">サーバー状態はTanStack Query、UI状態はZustandで分離管理します。</p>
                        <div class="text-sm">
                            <p class="font-semibold mb-1">なぜこれを選ぶ？</p>
                            <ul class="space-y-1 text-gray-600">
                                <li>・<strong>TanStack Query</strong> - APIデータのキャッシュ・再取得・楽観的更新を自動化。タスク一覧やプロジェクト情報などサーバーから取得するデータの管理に最適。</li>
                                <li>・<strong>Zustand</strong> - モーダルの開閉、ドラッグ中の状態など、サーバーと同期不要なUI状態を軽量に管理。Redux比でボイラープレートが大幅に少ない。</li>
                                <li>・<strong>React Context</strong>は避ける - 再レンダリングの制御が難しく、状態が増えるとパフォーマンスが劣化しやすい。</li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-4 bg-gray-50 rounded">
                        <h4 class="font-bold mb-2">&#10003; バックエンド構成: モノリス + レイヤードアーキテクチャ</h4>
                        <p class="text-sm text-gray-600 mb-3">規模的にモノリスで十分。API / Service / Repository層で責務を分離します。</p>
                        <div class="text-sm">
                            <p class="font-semibold mb-1">なぜこれを選ぶ？</p>
                            <ul class="space-y-1 text-gray-600">
                                <li>・<strong>マイクロサービス</strong>は避ける - 同時接続100人規模のアプリにマイクロサービスはオーバーエンジニアリング。サービス間通信、分散トランザクション、デプロイの複雑さが不要な負担になる。</li>
                                <li>・<strong>レイヤード構成</strong>を採用 - API層（エンドポイント定義）→ Service層（ビジネスロジック）→ Repository層（データアクセス）の3層構造。テストが書きやすく、将来の分割も容易。</li>
                                <li>・<strong>FastAPI</strong> - Python製で学習コストが低く、非同期処理・WebSocket・自動APIドキュメント生成を標準サポート。</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CLAUDE.mdの作成 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">CLAUDE.mdの作成</h2>

            <p class="mb-4"><code class="bg-gray-100 px-2 py-1 rounded">CLAUDE.md</code> は、Claude Codeがプロジェクトのコンテキストを理解するための設定ファイルです。プロジェクトのルールやアーキテクチャをここに書いておくと、Claude Codeが毎回のセッションで自動的に読み込み、一貫性のあるコードを生成してくれます。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 rounded">
                    <h4 class="font-bold text-indigo-700 mb-2">Claude Codeへの指示</h4>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>プロジェクトルートにCLAUDE.mdを作成してください。
以下の内容を含めてください：

1. プロジェクト概要（TaskFlowの説明）
2. 技術スタック一覧
3. 開発コマンド（frontend, backend, Docker）
4. ディレクトリ構成のルール
5. コーディング規約（命名規則、ファイル配置）
6. API設計のルール（RESTful、エラーレスポンス形式）</pre>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">生成されるCLAUDE.mdの例</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># CLAUDE.md</span>

<span class="text-green-400">## プロジェクト概要</span>
TaskFlow - カンバン形式のプロジェクト管理ツール。
リアルタイム同期対応。複数ユーザーが同時に共同作業可能。

<span class="text-green-400">## 技術スタック</span>
- Frontend: Next.js 14 (App Router, TypeScript, Tailwind CSS)
- Backend: FastAPI (Python 3.11+)
- DB: MySQL 8
- Cache/PubSub: Redis
- Container: Docker Compose

<span class="text-green-400">## 開発コマンド</span>
```bash
<span class="text-green-400"># 全サービス起動</span>
docker compose up -d

<span class="text-green-400"># フロントエンドのみ（ホットリロード）</span>
cd frontend && npm run dev

<span class="text-green-400"># バックエンドのみ（ホットリロード）</span>
cd backend && uvicorn app.main:app --reload

<span class="text-green-400"># テスト実行</span>
cd backend && pytest
cd frontend && npm test
```

<span class="text-green-400">## アーキテクチャ</span>
- バックエンドはレイヤードアーキテクチャ（API → Service → Repository）
- フロントエンドはfeatureベースのディレクトリ構成
- サーバー状態: TanStack Query / UI状態: Zustand
- リアルタイム通信: WebSocket (Redis PubSub経由)

<span class="text-green-400">## コーディング規約</span>
- Python: snake_case（関数・変数）、PascalCase（クラス）
- TypeScript: camelCase（関数・変数）、PascalCase（コンポーネント・型）
- APIエンドポイント: /api/v1/ プレフィックス、RESTful設計
- エラーレスポンス: {"detail": "エラーメッセージ"} 形式</pre>
                </div>
            </div>

            <div class="bg-purple-50 border-l-4 border-purple-500 p-4">
                <p class="text-sm"><strong>ポイント：</strong>CLAUDE.mdがあると、Claude Codeは「このプロジェクトではFastAPIを使っている」「レイヤード構成に従うべき」といったコンテキストを自動的に把握します。新しいファイルを作るときも、既存のパターンに合わせたコードを生成してくれます。</p>
            </div>
        </section>

        <!-- 初期設定ファイル -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">初期設定ファイル</h2>

            <p class="mb-6">依存パッケージを定義するファイルを作成します。Claude Codeに指示すれば自動生成されますが、ここでは内容を理解しておきましょう。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">backend/requirements.txt</h3>
                <p class="text-sm text-gray-600 mb-3">バックエンドのPythonパッケージ一覧です。</p>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># Web framework</span>
fastapi==0.104.1
uvicorn[standard]==0.24.0

<span class="text-green-400"># Database</span>
sqlalchemy==2.0.23
pymysql==1.1.0
alembic==1.13.0

<span class="text-green-400"># Authentication</span>
python-jose[cryptography]==3.3.0
passlib[bcrypt]==1.7.4

<span class="text-green-400"># WebSocket & Cache</span>
websockets==12.0
redis==5.0.1

<span class="text-green-400"># Utilities</span>
pydantic-settings==2.1.0
httpx==0.25.2
python-multipart==0.0.6

<span class="text-green-400"># Testing</span>
pytest==7.4.3
pytest-asyncio==0.23.2</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">frontend/package.json（主要な依存関係）</h3>
                <p class="text-sm text-gray-600 mb-3">フロントエンドのnpmパッケージ一覧です。<code class="bg-gray-100 px-1 rounded">create-next-app</code> で生成されるものに加え、追加パッケージをインストールします。</p>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>{
  <span class="text-green-400">"name"</span>: <span class="text-green-400">"taskflow-frontend"</span>,
  <span class="text-green-400">"version"</span>: <span class="text-green-400">"0.1.0"</span>,
  <span class="text-green-400">"dependencies"</span>: {
    <span class="text-green-400">"next"</span>: <span class="text-green-400">"14.0.4"</span>,
    <span class="text-green-400">"react"</span>: <span class="text-green-400">"^18"</span>,
    <span class="text-green-400">"react-dom"</span>: <span class="text-green-400">"^18"</span>,
    <span class="text-green-400">"@dnd-kit/core"</span>: <span class="text-green-400">"^6.1.0"</span>,
    <span class="text-green-400">"@dnd-kit/sortable"</span>: <span class="text-green-400">"^8.0.0"</span>,
    <span class="text-green-400">"@tanstack/react-query"</span>: <span class="text-green-400">"^5.13.4"</span>,
    <span class="text-green-400">"zustand"</span>: <span class="text-green-400">"^4.4.7"</span>,
    <span class="text-green-400">"axios"</span>: <span class="text-green-400">"^1.6.2"</span>
  },
  <span class="text-green-400">"devDependencies"</span>: {
    <span class="text-green-400">"typescript"</span>: <span class="text-green-400">"^5"</span>,
    <span class="text-green-400">"tailwindcss"</span>: <span class="text-green-400">"^3.3.0"</span>,
    <span class="text-green-400">"@types/node"</span>: <span class="text-green-400">"^20"</span>,
    <span class="text-green-400">"@types/react"</span>: <span class="text-green-400">"^18"</span>,
    <span class="text-green-400">"eslint"</span>: <span class="text-green-400">"^8"</span>
  }
}</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 rounded">
                    <h4 class="font-bold text-indigo-700 mb-2">Claude Codeへの指示</h4>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>以下の追加パッケージをfrontendにインストールしてください：

npm install @dnd-kit/core @dnd-kit/sortable @tanstack/react-query zustand axios

また、backendにrequirements.txtを作成し、
必要なパッケージを記載してください。</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- ディレクトリ構成 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">ディレクトリ構成</h2>

            <p class="mb-4">スキャフォールド完了後の全体構成です。各ディレクトリの役割を理解しておきましょう。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>taskflow/
├── CLAUDE.md                  <span class="text-green-400"># Claude Code用プロジェクト設定</span>
├── docker-compose.yml         <span class="text-green-400"># 全サービスのコンテナ定義</span>
├── .gitignore
├── frontend/
│   ├── src/
│   │   ├── app/               <span class="text-green-400"># Next.js App Router（ページ定義）</span>
│   │   ├── components/        <span class="text-green-400"># 共通UIコンポーネント</span>
│   │   ├── features/          <span class="text-green-400"># 機能別モジュール</span>
│   │   │   ├── auth/          <span class="text-green-400">#   認証（login, register）</span>
│   │   │   ├── projects/      <span class="text-green-400">#   プロジェクト管理</span>
│   │   │   └── tasks/         <span class="text-green-400">#   タスク・カンバンボード</span>
│   │   ├── hooks/             <span class="text-green-400"># カスタムフック</span>
│   │   ├── lib/               <span class="text-green-400"># ユーティリティ（API client等）</span>
│   │   └── stores/            <span class="text-green-400"># Zustandストア定義</span>
│   ├── package.json
│   ├── Dockerfile
│   └── ...
├── backend/
│   ├── app/
│   │   ├── main.py            <span class="text-green-400"># FastAPIアプリケーションのエントリーポイント</span>
│   │   ├── api/               <span class="text-green-400"># APIエンドポイント定義</span>
│   │   │   └── v1/            <span class="text-green-400">#   バージョニング対応</span>
│   │   ├── services/          <span class="text-green-400"># ビジネスロジック層</span>
│   │   ├── repositories/      <span class="text-green-400"># データアクセス層</span>
│   │   ├── models/            <span class="text-green-400"># SQLAlchemyモデル定義</span>
│   │   ├── schemas/           <span class="text-green-400"># Pydanticスキーマ（リクエスト/レスポンス）</span>
│   │   ├── websocket/         <span class="text-green-400"># WebSocket接続管理</span>
│   │   ├── core/              <span class="text-green-400"># 設定・認証・DB接続</span>
│   │   └── utils/             <span class="text-green-400"># 共通ユーティリティ</span>
│   ├── alembic/               <span class="text-green-400"># DBマイグレーション</span>
│   ├── tests/                 <span class="text-green-400"># テストコード</span>
│   ├── requirements.txt
│   ├── Dockerfile
│   └── ...
└── docs/                      <span class="text-green-400"># API仕様書・設計ドキュメント</span></pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">主要ディレクトリの役割</h3>
                <div class="space-y-3 text-sm">
                    <div class="flex items-start gap-3">
                        <code class="bg-purple-100 text-purple-700 px-2 py-1 rounded whitespace-nowrap">features/</code>
                        <p class="text-gray-600">機能単位でコンポーネント・フック・型定義をまとめる。関連するコードが一箇所に集約されるため、見通しが良い。</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <code class="bg-purple-100 text-purple-700 px-2 py-1 rounded whitespace-nowrap">services/</code>
                        <p class="text-gray-600">ビジネスロジックを担当。APIエンドポイントから呼び出される。DBアクセスはRepositoryに委譲する。</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <code class="bg-purple-100 text-purple-700 px-2 py-1 rounded whitespace-nowrap">repositories/</code>
                        <p class="text-gray-600">SQLAlchemyを使ったデータベース操作のみを担当。Service層とDB層の依存を分離する。</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <code class="bg-purple-100 text-purple-700 px-2 py-1 rounded whitespace-nowrap">schemas/</code>
                        <p class="text-gray-600">PydanticモデルでAPIのリクエスト・レスポンスの型を定義。バリデーションも自動で行われる。</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <code class="bg-purple-100 text-purple-700 px-2 py-1 rounded whitespace-nowrap">websocket/</code>
                        <p class="text-gray-600">WebSocket接続の管理とRedis PubSubによるメッセージブロードキャストを担当。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="project-design.php" class="flex items-center text-gray-600 hover:text-purple-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                要件定義
            </a>
            <a href="project-impl1.php" class="flex items-center bg-purple-500 text-white px-6 py-3 rounded-lg hover:bg-purple-600">
                次へ：実装フェーズ1
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>


<?php include 'includes/footer.php'; ?>
