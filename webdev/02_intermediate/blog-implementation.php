<?php
$page_title = 'ブログアプリ実装編 - AI×Web開発 中級編 | AI Tech Stack';
$current_page = 'practice';
$extra_styles = '.code-block {
            background: #1e293b;
            color: #e2e8f0;
        }';
$section_name = '第8部：実践プロジェクト';
$step_number = 23;
$total_steps = 24;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">ブログアプリ実装編</h1>

        <!-- イントロ -->
        <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 mb-8">
            <p class="text-lg">設計に基づいて、Claude Codeと一緒にブログアプリを実装していきましょう。</p>
            <p class="text-sm mt-2 text-gray-600">各ステップでClaude Codeへの指示 → 生成結果の確認 → 動作確認の流れで進めます。</p>
        </div>

        <!-- 事前準備 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">事前準備</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">プロジェクトフォルダの作成</h3>
                <p class="text-sm text-gray-600 mb-4">まず、作業ディレクトリを作成してClaude Codeを起動します。</p>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># プロジェクトフォルダを作成</span>
mkdir blog-app
cd blog-app

<span class="text-green-400"># Claude Codeを起動</span>
claude</pre>
                </div>
            </div>
        </section>

        <!-- Step 1: Docker環境 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">Step 1: Docker環境のセットアップ</h2>

            <!-- Claude Codeへの指示 -->
            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded-lg mb-6">
                <h3 class="font-bold mb-3 text-indigo-700">Claude Codeへの指示</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>ブログアプリ用のDocker Compose環境を作成してください。

構成：
- MySQL 8.0（ポート3306）
- FastAPI（Python 3.11、ポート8000）
- Next.js 14（ポート3000）

要件：
- 開発時のホットリロード対応
- MySQLデータの永続化（named volume）
- 環境変数は.envファイルで管理
- backendとfrontendそれぞれにDockerfileも作成
- .envファイルも作成（MySQL接続情報、SECRET_KEY）
- .gitignoreも作成</pre>
                </div>
            </div>

            <!-- Claude Codeが行うこと -->
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-gray-700">Claude Codeが行うこと</h3>
                <p class="text-sm text-gray-600 mb-3">以下のファイルが生成されます。ファイル作成の許可を求められたら「Yes」を選択してください。</p>
                <ul class="text-sm space-y-2">
                    <li class="flex items-center"><span class="text-green-500 mr-2">&#10003;</span> compose.yaml</li>
                    <li class="flex items-center"><span class="text-green-500 mr-2">&#10003;</span> backend/Dockerfile</li>
                    <li class="flex items-center"><span class="text-green-500 mr-2">&#10003;</span> backend/requirements.txt</li>
                    <li class="flex items-center"><span class="text-green-500 mr-2">&#10003;</span> frontend/Dockerfile</li>
                    <li class="flex items-center"><span class="text-green-500 mr-2">&#10003;</span> .env</li>
                    <li class="flex items-center"><span class="text-green-500 mr-2">&#10003;</span> .gitignore</li>
                </ul>
            </div>

            <!-- 完成コード -->
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-gray-700">完成コード: compose.yaml</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># compose.yaml</span>
services:
  db:
    image: mysql:8.0
    environment:
      MYSQL_ROOT_PASSWORD: ${MYSQL_ROOT_PASSWORD}
      MYSQL_DATABASE: ${MYSQL_DATABASE}
      MYSQL_USER: ${MYSQL_USER}
      MYSQL_PASSWORD: ${MYSQL_PASSWORD}
    ports:
      - "3306:3306"
    volumes:
      - mysql_data:/var/lib/mysql
    healthcheck:
      test: ["CMD", "mysqladmin", "ping", "-h", "localhost"]
      interval: 10s
      timeout: 5s
      retries: 5

  backend:
    build: ./backend
    ports:
      - "8000:8000"
    volumes:
      - ./backend:/app
    environment:
      DATABASE_URL: mysql+pymysql://${MYSQL_USER}:${MYSQL_PASSWORD}@db:3306/${MYSQL_DATABASE}
      SECRET_KEY: ${SECRET_KEY}
    depends_on:
      db:
        condition: service_healthy
    command: uvicorn main:app --host 0.0.0.0 --port 8000 --reload

  frontend:
    build: ./frontend
    ports:
      - "3000:3000"
    volumes:
      - ./frontend:/app
      - /app/node_modules
    environment:
      NEXT_PUBLIC_API_URL: http://localhost:8000
    depends_on:
      - backend

volumes:
  mysql_data:</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-gray-700">完成コード: backend/Dockerfile</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>FROM python:3.11-slim

WORKDIR /app

COPY requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

COPY . .

CMD ["uvicorn", "main:app", "--host", "0.0.0.0", "--port", "8000", "--reload"]</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-gray-700">完成コード: .env</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>MYSQL_ROOT_PASSWORD=rootpassword
MYSQL_DATABASE=blog
MYSQL_USER=bloguser
MYSQL_PASSWORD=blogpassword
SECRET_KEY=your-secret-key-change-in-production</pre>
                </div>
            </div>

            <!-- 動作確認 -->
            <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded-lg mb-6">
                <h3 class="font-bold mb-3 text-green-700">動作確認</h3>
                <p class="text-sm text-gray-600 mb-3">Claude Codeに以下を指示して、コンテナを起動します。</p>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-3">
<pre>docker compose up -d を実行して、すべてのコンテナが起動することを確認してください。</pre>
                </div>
                <p class="text-sm text-gray-600 mb-2">確認ポイント：</p>
                <ul class="text-sm space-y-1">
                    <li>&#9745; <code>docker compose ps</code> で3つのコンテナがすべて「running」</li>
                    <li>&#9745; <code>http://localhost:8000</code> にアクセスできる</li>
                    <li>&#9745; <code>http://localhost:3000</code> にアクセスできる</li>
                </ul>
            </div>

            <!-- よくあるエラー -->
            <div class="bg-red-50 border-l-4 border-red-400 p-6 rounded-lg">
                <h3 class="font-bold mb-3 text-red-700">よくあるエラーと対処法</h3>
                <div class="space-y-3 text-sm">
                    <div>
                        <p class="font-bold">ポートが既に使用されている</p>
                        <p class="text-gray-600">→ <code>docker compose down</code> で停止してから再起動。または他のアプリを停止。</p>
                    </div>
                    <div>
                        <p class="font-bold">MySQLの起動に時間がかかる</p>
                        <p class="text-gray-600">→ healthcheckの設定があるので、初回は1-2分待ってください。</p>
                    </div>
                    <div>
                        <p class="font-bold">backendがdbに接続できない</p>
                        <p class="text-gray-600">→ <code>docker compose logs backend</code> でログを確認。.envの値とcompose.yamlが一致しているか確認。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Step 2: バックエンド基盤 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">Step 2: バックエンド基盤</h2>

            <!-- Claude Codeへの指示 -->
            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded-lg mb-6">
                <h3 class="font-bold mb-3 text-indigo-700">Claude Codeへの指示</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>FastAPIのバックエンド基盤を作成してください。

ファイル構成：
1. backend/main.py - FastAPIアプリのエントリポイント（CORS設定含む）
2. backend/config.py - pydantic-settingsで環境変数管理
3. backend/database.py - SQLAlchemy接続設定（セッション管理）
4. backend/models.py - User, Postモデル（SQLAlchemy）
5. backend/schemas.py - リクエスト/レスポンスのPydanticスキーマ

MySQL接続URL: 環境変数DATABASE_URLから取得
起動時にテーブルを自動作成する設定にしてください。</pre>
                </div>
            </div>

            <!-- Claude Codeが行うこと -->
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-gray-700">Claude Codeが行うこと</h3>
                <p class="text-sm text-gray-600 mb-3">5つのPythonファイルが生成されます。それぞれ「Yes」で許可してください。</p>
            </div>

            <!-- 完成コード -->
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-gray-700">完成コード: backend/main.py</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># backend/main.py</span>
from fastapi import FastAPI
from fastapi.middleware.cors import CORSMiddleware
from database import engine
from models import Base

app = FastAPI(title="Blog API")

<span class="text-green-400"># CORS設定（フロントエンドからのアクセスを許可）</span>
app.add_middleware(
    CORSMiddleware,
    allow_origins=["http://localhost:3000"],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

<span class="text-green-400"># 起動時にテーブルを自動作成</span>
@app.on_event("startup")
def startup():
    Base.metadata.create_all(bind=engine)

@app.get("/")
def root():
    return {"message": "Blog API is running"}</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-gray-700">完成コード: backend/database.py</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># backend/database.py</span>
from sqlalchemy import create_engine
from sqlalchemy.orm import sessionmaker, declarative_base
from config import settings

engine = create_engine(settings.database_url)
SessionLocal = sessionmaker(autocommit=False, autoflush=False, bind=engine)
Base = declarative_base()

<span class="text-green-400"># FastAPIの依存性注入で使うDB接続関数</span>
def get_db():
    db = SessionLocal()
    try:
        yield db
    finally:
        db.close()</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-gray-700">完成コード: backend/models.py</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># backend/models.py</span>
from sqlalchemy import Column, Integer, String, Text, DateTime, ForeignKey
from sqlalchemy.orm import relationship
from sqlalchemy.sql import func
from database import Base

class User(Base):
    __tablename__ = "users"

    id = Column(Integer, primary_key=True, index=True)
    email = Column(String(255), unique=True, index=True, nullable=False)
    name = Column(String(100), nullable=False)
    password_hash = Column(String(255), nullable=False)
    created_at = Column(DateTime, server_default=func.now())
    updated_at = Column(DateTime, server_default=func.now(), onupdate=func.now())

    posts = relationship("Post", back_populates="author")

class Post(Base):
    __tablename__ = "posts"

    id = Column(Integer, primary_key=True, index=True)
    title = Column(String(255), nullable=False)
    content = Column(Text, nullable=False)
    author_id = Column(Integer, ForeignKey("users.id"), nullable=False)
    created_at = Column(DateTime, server_default=func.now())
    updated_at = Column(DateTime, server_default=func.now(), onupdate=func.now())

    author = relationship("User", back_populates="posts")</pre>
                </div>
            </div>

            <!-- 動作確認 -->
            <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded-lg mb-6">
                <h3 class="font-bold mb-3 text-green-700">動作確認</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-3">
<pre>docker compose restart backend を実行してバックエンドを再起動してください。</pre>
                </div>
                <ul class="text-sm space-y-1">
                    <li>&#9745; <code>http://localhost:8000</code> で <code>{"message": "Blog API is running"}</code> が表示される</li>
                    <li>&#9745; <code>http://localhost:8000/docs</code> でSwagger UIが表示される</li>
                    <li>&#9745; <code>docker compose logs backend</code> にエラーがない</li>
                </ul>
            </div>

            <!-- よくあるエラー -->
            <div class="bg-red-50 border-l-4 border-red-400 p-6 rounded-lg">
                <h3 class="font-bold mb-3 text-red-700">よくあるエラーと対処法</h3>
                <div class="space-y-3 text-sm">
                    <div>
                        <p class="font-bold">ModuleNotFoundError: No module named 'xxx'</p>
                        <p class="text-gray-600">→ requirements.txtにパッケージが不足しています。Claude Codeに「requirements.txtを確認して不足しているパッケージを追加してください」と指示。</p>
                    </div>
                    <div>
                        <p class="font-bold">sqlalchemy.exc.OperationalError: Can't connect to MySQL</p>
                        <p class="text-gray-600">→ MySQLコンテナが起動完了していない可能性。<code>docker compose ps</code> でdbのステータスを確認。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Step 3: 認証API -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">Step 3: 認証API実装</h2>

            <!-- Claude Codeへの指示 -->
            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded-lg mb-6">
                <h3 class="font-bold mb-3 text-indigo-700">Claude Codeへの指示</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>JWT認証機能を実装してください。

ファイル：
1. backend/auth.py - パスワードハッシュ（bcrypt）、JWT生成・検証、get_current_user依存関数
2. backend/routers/auth.py - 認証エンドポイント

エンドポイント：
- POST /auth/register - ユーザー登録（email, password, name）
- POST /auth/login - ログイン（OAuth2PasswordRequestFormを使用、access_tokenを返す）
- GET /auth/me - 自分の情報取得（認証必要）

要件：
- bcryptでパスワードハッシュ
- JWTトークンの有効期限は30分
- SECRET_KEYは環境変数から取得
- email重複時は400エラー
- main.pyにルーターを登録</pre>
                </div>
            </div>

            <!-- Claude Codeが行うこと -->
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-gray-700">Claude Codeが行うこと</h3>
                <ul class="text-sm space-y-2">
                    <li class="flex items-center"><span class="text-green-500 mr-2">&#10003;</span> backend/auth.py を作成</li>
                    <li class="flex items-center"><span class="text-green-500 mr-2">&#10003;</span> backend/routers/auth.py を作成</li>
                    <li class="flex items-center"><span class="text-green-500 mr-2">&#10003;</span> backend/main.py にルーターを追加</li>
                    <li class="flex items-center"><span class="text-green-500 mr-2">&#10003;</span> backend/requirements.txt にパッケージ追加（python-jose, passlib, bcrypt）</li>
                </ul>
            </div>

            <!-- 完成コード -->
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-gray-700">完成コード: backend/auth.py</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># backend/auth.py</span>
from datetime import datetime, timedelta
from jose import JWTError, jwt
from passlib.context import CryptContext
from fastapi import Depends, HTTPException, status
from fastapi.security import OAuth2PasswordBearer
from sqlalchemy.orm import Session
from database import get_db
from models import User
from config import settings

pwd_context = CryptContext(schemes=["bcrypt"], deprecated="auto")
oauth2_scheme = OAuth2PasswordBearer(tokenUrl="/auth/login")

def hash_password(password: str) -&gt; str:
    return pwd_context.hash(password)

def verify_password(plain_password: str, hashed_password: str) -&gt; bool:
    return pwd_context.verify(plain_password, hashed_password)

def create_access_token(data: dict) -&gt; str:
    to_encode = data.copy()
    expire = datetime.utcnow() + timedelta(minutes=30)
    to_encode.update({"exp": expire})
    return jwt.encode(to_encode, settings.secret_key, algorithm="HS256")

def get_current_user(
    token: str = Depends(oauth2_scheme),
    db: Session = Depends(get_db)
) -&gt; User:
    credentials_exception = HTTPException(
        status_code=status.HTTP_401_UNAUTHORIZED,
        detail="認証情報が無効です",
    )
    try:
        payload = jwt.decode(token, settings.secret_key, algorithms=["HS256"])
        user_id: int = payload.get("sub")
        if user_id is None:
            raise credentials_exception
    except JWTError:
        raise credentials_exception
    user = db.query(User).filter(User.id == user_id).first()
    if user is None:
        raise credentials_exception
    return user</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-gray-700">完成コード: backend/routers/auth.py</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># backend/routers/auth.py</span>
from fastapi import APIRouter, Depends, HTTPException, status
from fastapi.security import OAuth2PasswordRequestForm
from sqlalchemy.orm import Session
from database import get_db
from models import User
from schemas import UserCreate, UserResponse, Token
from auth import hash_password, verify_password, create_access_token, get_current_user

router = APIRouter(prefix="/auth", tags=["auth"])

@router.post("/register", response_model=UserResponse)
def register(user_data: UserCreate, db: Session = Depends(get_db)):
    <span class="text-green-400"># メール重複チェック</span>
    existing = db.query(User).filter(User.email == user_data.email).first()
    if existing:
        raise HTTPException(status_code=400, detail="このメールアドレスは既に登録されています")

    user = User(
        email=user_data.email,
        name=user_data.name,
        password_hash=hash_password(user_data.password),
    )
    db.add(user)
    db.commit()
    db.refresh(user)
    return user

@router.post("/login", response_model=Token)
def login(form_data: OAuth2PasswordRequestForm = Depends(), db: Session = Depends(get_db)):
    user = db.query(User).filter(User.email == form_data.username).first()
    if not user or not verify_password(form_data.password, user.password_hash):
        raise HTTPException(status_code=401, detail="メールアドレスまたはパスワードが間違っています")

    access_token = create_access_token(data={"sub": user.id})
    return {"access_token": access_token, "token_type": "bearer"}

@router.get("/me", response_model=UserResponse)
def get_me(current_user: User = Depends(get_current_user)):
    return current_user</pre>
                </div>
            </div>

            <!-- 動作確認 -->
            <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded-lg mb-6">
                <h3 class="font-bold mb-3 text-green-700">動作確認（Swagger UIでテスト）</h3>
                <p class="text-sm text-gray-600 mb-3"><code>http://localhost:8000/docs</code> を開いて以下の順番でテストします。</p>
                <ol class="text-sm space-y-3">
                    <li>
                        <p class="font-bold">1. ユーザー登録</p>
                        <p class="text-gray-600">POST /auth/register を開き「Try it out」をクリック。以下を入力して「Execute」：</p>
                        <div class="code-block p-3 rounded font-mono text-xs mt-2 overflow-x-auto">
<pre>{
  "email": "test@example.com",
  "password": "password123",
  "name": "テストユーザー"
}</pre>
                        </div>
                        <p class="text-gray-600 mt-1">→ 200レスポンスでユーザー情報が返ればOK</p>
                    </li>
                    <li>
                        <p class="font-bold">2. ログイン</p>
                        <p class="text-gray-600">POST /auth/login を開き「Try it out」をクリック。usernameに <code>test@example.com</code>、passwordに <code>password123</code> を入力して「Execute」。</p>
                        <p class="text-gray-600 mt-1">→ <code>access_token</code> が返ればOK。このトークンをコピーしておく。</p>
                    </li>
                    <li>
                        <p class="font-bold">3. 認証テスト</p>
                        <p class="text-gray-600">ページ上部の「Authorize」ボタンをクリック → コピーしたトークンを貼り付けて「Authorize」。</p>
                        <p class="text-gray-600 mt-1">GET /auth/me を開き「Try it out」→「Execute」。</p>
                        <p class="text-gray-600 mt-1">→ 自分のユーザー情報が返ればOK</p>
                    </li>
                </ol>
            </div>
        </section>

        <!-- Step 4: 記事API -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">Step 4: 記事API実装</h2>

            <!-- Claude Codeへの指示 -->
            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded-lg mb-6">
                <h3 class="font-bold mb-3 text-indigo-700">Claude Codeへの指示</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>記事のCRUD APIを実装してください。

ファイル：
- backend/routers/posts.py

エンドポイント：
- GET /posts - 記事一覧（ページネーション: skip, limit パラメータ）
- GET /posts/{id} - 記事詳細（著者情報も含む）
- POST /posts - 記事作成（認証必要）
- PUT /posts/{id} - 記事更新（本人のみ）
- DELETE /posts/{id} - 記事削除（本人のみ）

要件：
- 一覧は新しい順（created_at DESC）にソート
- 詳細では著者のnameとemailも返す
- 本人以外の更新・削除は403エラー
- 存在しない記事IDは404エラー
- schemas.pyにPostCreate, PostUpdate, PostResponseスキーマを追加
- main.pyにルーターを登録</pre>
                </div>
            </div>

            <!-- 完成コード -->
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-gray-700">完成コード: backend/routers/posts.py</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># backend/routers/posts.py</span>
from fastapi import APIRouter, Depends, HTTPException, status
from sqlalchemy.orm import Session
from typing import List
from database import get_db
from models import Post, User
from schemas import PostCreate, PostUpdate, PostResponse
from auth import get_current_user

router = APIRouter(prefix="/posts", tags=["posts"])

@router.get("/", response_model=List[PostResponse])
def get_posts(skip: int = 0, limit: int = 10, db: Session = Depends(get_db)):
    posts = db.query(Post).order_by(Post.created_at.desc()).offset(skip).limit(limit).all()
    return posts

@router.get("/{post_id}", response_model=PostResponse)
def get_post(post_id: int, db: Session = Depends(get_db)):
    post = db.query(Post).filter(Post.id == post_id).first()
    if not post:
        raise HTTPException(status_code=404, detail="記事が見つかりません")
    return post

@router.post("/", response_model=PostResponse, status_code=201)
def create_post(
    post_data: PostCreate,
    current_user: User = Depends(get_current_user),
    db: Session = Depends(get_db)
):
    post = Post(**post_data.dict(), author_id=current_user.id)
    db.add(post)
    db.commit()
    db.refresh(post)
    return post

@router.put("/{post_id}", response_model=PostResponse)
def update_post(
    post_id: int,
    post_data: PostUpdate,
    current_user: User = Depends(get_current_user),
    db: Session = Depends(get_db)
):
    post = db.query(Post).filter(Post.id == post_id).first()
    if not post:
        raise HTTPException(status_code=404, detail="記事が見つかりません")
    if post.author_id != current_user.id:
        raise HTTPException(status_code=403, detail="この記事を編集する権限がありません")

    for key, value in post_data.dict(exclude_unset=True).items():
        setattr(post, key, value)
    db.commit()
    db.refresh(post)
    return post

@router.delete("/{post_id}", status_code=204)
def delete_post(
    post_id: int,
    current_user: User = Depends(get_current_user),
    db: Session = Depends(get_db)
):
    post = db.query(Post).filter(Post.id == post_id).first()
    if not post:
        raise HTTPException(status_code=404, detail="記事が見つかりません")
    if post.author_id != current_user.id:
        raise HTTPException(status_code=403, detail="この記事を削除する権限がありません")

    db.delete(post)
    db.commit()</pre>
                </div>
            </div>

            <!-- 動作確認 -->
            <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded-lg mb-6">
                <h3 class="font-bold mb-3 text-green-700">動作確認（Swagger UI + curl）</h3>
                <p class="text-sm text-gray-600 mb-3">Swagger UIまたはcurlで以下を順番にテストします。</p>
                <ol class="text-sm space-y-3">
                    <li>
                        <p class="font-bold">1. 記事作成（認証済みの状態で）</p>
                        <div class="code-block p-3 rounded font-mono text-xs mt-2 overflow-x-auto">
<pre>curl -X POST http://localhost:8000/posts/ \
  -H "Authorization: Bearer YOUR_TOKEN" \
  -H "Content-Type: application/json" \
  -d '{"title": "最初の記事", "content": "Hello World! これはテスト記事です。"}'</pre>
                        </div>
                    </li>
                    <li>
                        <p class="font-bold">2. 記事一覧取得</p>
                        <div class="code-block p-3 rounded font-mono text-xs mt-2 overflow-x-auto">
<pre>curl http://localhost:8000/posts/</pre>
                        </div>
                        <p class="text-gray-600 mt-1">→ 作成した記事が配列で返ればOK</p>
                    </li>
                    <li>
                        <p class="font-bold">3. 他人の記事を編集しようとする（403エラーの確認）</p>
                        <p class="text-gray-600">→ 別ユーザーで登録・ログインし、最初のユーザーの記事IDでPUTリクエスト → 403エラーが返ればOK</p>
                    </li>
                </ol>
            </div>
        </section>

        <!-- Step 5: フロントエンド -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">Step 5: フロントエンド実装</h2>

            <p class="text-gray-600 mb-6">フロントエンドは3回に分けてClaude Codeに指示します。</p>

            <!-- 5-1: 認証 -->
            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded-lg mb-6">
                <h3 class="font-bold mb-3 text-indigo-700">Claude Codeへの指示（1/3：認証機能）</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>Next.jsのフロントエンドで認証機能を実装してください。

ファイル：
1. frontend/src/contexts/AuthContext.tsx - 認証状態管理（Context API）
2. frontend/src/app/login/page.tsx - ログインページ
3. frontend/src/app/register/page.tsx - 新規登録ページ
4. frontend/src/components/Header.tsx - ナビゲーション（認証状態で表示切替）
5. frontend/src/components/RequireAuth.tsx - 認証必須ラッパー
6. frontend/src/lib/api.ts - APIクライアント（fetch wrapper）

要件：
- トークンはlocalStorageに保存
- ログイン状態はContext APIで管理
- ログアウト後はトップページにリダイレクト
- APIのベースURLは環境変数NEXT_PUBLIC_API_URLから取得
- ログイン/登録フォームにバリデーションエラー表示</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-gray-700">完成コード: frontend/src/contexts/AuthContext.tsx（主要部分）</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400">// frontend/src/contexts/AuthContext.tsx</span>
"use client";
import { createContext, useContext, useState, useEffect, ReactNode } from "react";
import { api } from "@/lib/api";

type User = { id: number; email: string; name: string };

type AuthContextType = {
  user: User | null;
  login: (email: string, password: string) =&gt; Promise&lt;void&gt;;
  register: (email: string, password: string, name: string) =&gt; Promise&lt;void&gt;;
  logout: () =&gt; void;
  isLoading: boolean;
};

const AuthContext = createContext&lt;AuthContextType&gt;({} as AuthContextType);

export function AuthProvider({ children }: { children: ReactNode }) {
  const [user, setUser] = useState&lt;User | null&gt;(null);
  const [isLoading, setIsLoading] = useState(true);

  useEffect(() =&gt; {
    <span class="text-green-400">// ページ読み込み時にトークンがあればユーザー情報を取得</span>
    const token = localStorage.getItem("token");
    if (token) {
      api.get("/auth/me")
        .then(setUser)
        .catch(() =&gt; localStorage.removeItem("token"))
        .finally(() =&gt; setIsLoading(false));
    } else {
      setIsLoading(false);
    }
  }, []);

  const login = async (email: string, password: string) =&gt; {
    const formData = new URLSearchParams();
    formData.append("username", email);
    formData.append("password", password);
    const data = await api.postForm("/auth/login", formData);
    localStorage.setItem("token", data.access_token);
    const userData = await api.get("/auth/me");
    setUser(userData);
  };

  const logout = () =&gt; {
    localStorage.removeItem("token");
    setUser(null);
  };

  return (
    &lt;AuthContext.Provider value={{ user, login, register, logout, isLoading }}&gt;
      {children}
    &lt;/AuthContext.Provider&gt;
  );
}

export const useAuth = () =&gt; useContext(AuthContext);</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-gray-700">完成コード: frontend/src/components/Header.tsx（主要部分）</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400">// frontend/src/components/Header.tsx</span>
"use client";
import Link from "next/link";
import { useAuth } from "@/contexts/AuthContext";

export default function Header() {
  const { user, logout } = useAuth();

  return (
    &lt;header className="bg-white shadow"&gt;
      &lt;nav className="container mx-auto px-6 py-4 flex justify-between items-center"&gt;
        &lt;Link href="/" className="text-xl font-bold"&gt;Blog App&lt;/Link&gt;
        &lt;div className="flex items-center gap-4"&gt;
          {user ? (
            &lt;&gt;
              &lt;Link href="/posts/new" className="bg-blue-600 text-white px-4 py-2 rounded"&gt;
                記事を書く
              &lt;/Link&gt;
              &lt;span&gt;{user.name}&lt;/span&gt;
              &lt;button onClick={logout} className="text-gray-600"&gt;ログアウト&lt;/button&gt;
            &lt;/&gt;
          ) : (
            &lt;&gt;
              &lt;Link href="/login"&gt;ログイン&lt;/Link&gt;
              &lt;Link href="/register" className="bg-blue-600 text-white px-4 py-2 rounded"&gt;
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

            <!-- 5-2: 記事表示 -->
            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded-lg mb-6">
                <h3 class="font-bold mb-3 text-indigo-700">Claude Codeへの指示（2/3：記事表示）</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>記事の表示機能を実装してください。

ファイル：
1. frontend/src/app/page.tsx - トップページ（記事一覧）
2. frontend/src/app/posts/[id]/page.tsx - 記事詳細ページ
3. frontend/src/components/ArticleCard.tsx - 記事カードコンポーネント

要件：
- トップページに記事一覧をカード形式で表示
- 各カードにはタイトル、著者名、作成日を表示
- クリックで記事詳細ページに遷移
- 詳細ページでは本人なら「編集」「削除」ボタンを表示
- 記事がない場合は「記事がありません」と表示
- 作成日はyyyy/mm/dd形式で表示</pre>
                </div>
            </div>

            <!-- 5-3: 記事作成・編集 -->
            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded-lg mb-6">
                <h3 class="font-bold mb-3 text-indigo-700">Claude Codeへの指示（3/3：記事作成・編集）</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>記事の作成・編集機能を実装してください。

ファイル：
1. frontend/src/app/posts/new/page.tsx - 記事作成ページ
2. frontend/src/app/posts/[id]/edit/page.tsx - 記事編集ページ
3. frontend/src/components/PostForm.tsx - 記事フォーム（作成・編集共通）

要件：
- 認証必須（RequireAuthで囲む）
- バリデーション（タイトル必須、本文10文字以上）
- 送信後は記事詳細にリダイレクト
- 編集ページは既存データを初期値として読み込む
- 削除は確認ダイアログを表示してから実行
- 送信中はボタンを無効化してローディング表示</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-gray-700">完成コード: frontend/src/components/PostForm.tsx（主要部分）</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400">// frontend/src/components/PostForm.tsx</span>
"use client";
import { useState } from "react";
import { useRouter } from "next/navigation";
import { api } from "@/lib/api";

type Props = {
  initialData?: { title: string; content: string };
  postId?: number;
};

export default function PostForm({ initialData, postId }: Props) {
  const router = useRouter();
  const [title, setTitle] = useState(initialData?.title ?? "");
  const [content, setContent] = useState(initialData?.content ?? "");
  const [errors, setErrors] = useState&lt;string[]&gt;([]);
  const [isSubmitting, setIsSubmitting] = useState(false);
  const isEdit = !!postId;

  const validate = () =&gt; {
    const newErrors: string[] = [];
    if (!title.trim()) newErrors.push("タイトルは必須です");
    if (content.length &lt; 10) newErrors.push("本文は10文字以上必要です");
    setErrors(newErrors);
    return newErrors.length === 0;
  };

  const handleSubmit = async (e: React.FormEvent) =&gt; {
    e.preventDefault();
    if (!validate()) return;
    setIsSubmitting(true);

    try {
      const data = { title, content };
      if (isEdit) {
        await api.put(`/posts/${postId}`, data);
        router.push(`/posts/${postId}`);
      } else {
        const newPost = await api.post("/posts/", data);
        router.push(`/posts/${newPost.id}`);
      }
    } catch (err) {
      setErrors(["保存に失敗しました"]);
    } finally {
      setIsSubmitting(false);
    }
  };

  return (
    &lt;form onSubmit={handleSubmit} className="space-y-6"&gt;
      {errors.map((err, i) =&gt; (
        &lt;p key={i} className="text-red-600 text-sm"&gt;{err}&lt;/p&gt;
      ))}
      &lt;input value={title} onChange={(e) =&gt; setTitle(e.target.value)}
        placeholder="タイトル" className="w-full p-3 border rounded" /&gt;
      &lt;textarea value={content} onChange={(e) =&gt; setContent(e.target.value)}
        placeholder="本文" rows={10} className="w-full p-3 border rounded" /&gt;
      &lt;button type="submit" disabled={isSubmitting}
        className="bg-blue-600 text-white px-6 py-3 rounded disabled:opacity-50"&gt;
        {isSubmitting ? "保存中..." : isEdit ? "更新する" : "投稿する"}
      &lt;/button&gt;
    &lt;/form&gt;
  );
}</pre>
                </div>
            </div>

            <!-- 動作確認 -->
            <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded-lg mb-6">
                <h3 class="font-bold mb-3 text-green-700">動作確認（ブラウザで確認）</h3>
                <p class="text-sm text-gray-600 mb-3"><code>http://localhost:3000</code> を開いて以下を順番にテストします。</p>
                <ol class="text-sm space-y-2">
                    <li>&#9745; トップページに記事一覧が表示される（まだ記事がなければ空でOK）</li>
                    <li>&#9745; 「新規登録」→ フォームに入力 → 登録成功 → ログイン状態になる</li>
                    <li>&#9745; ヘッダーに「記事を書く」ボタンとユーザー名が表示される</li>
                    <li>&#9745; 「記事を書く」→ タイトルと本文を入力 → 「投稿する」→ 記事詳細に遷移</li>
                    <li>&#9745; トップページに戻ると記事が表示されている</li>
                    <li>&#9745; 記事詳細で「編集」→ 内容を変更 → 「更新する」→ 変更が反映</li>
                    <li>&#9745; 記事詳細で「削除」→ 確認ダイアログで「OK」→ トップページに遷移</li>
                    <li>&#9745; ログアウト → 「記事を書く」ボタンが消える</li>
                </ol>
            </div>

            <!-- よくあるエラー -->
            <div class="bg-red-50 border-l-4 border-red-400 p-6 rounded-lg">
                <h3 class="font-bold mb-3 text-red-700">よくあるエラーと対処法</h3>
                <div class="space-y-3 text-sm">
                    <div>
                        <p class="font-bold">CORSエラー（ブラウザのコンソールに赤いエラー）</p>
                        <p class="text-gray-600">→ backend/main.pyのCORS設定で <code>http://localhost:3000</code> が許可されているか確認。</p>
                    </div>
                    <div>
                        <p class="font-bold">ログイン時に「Network Error」</p>
                        <p class="text-gray-600">→ backendコンテナが起動しているか <code>docker compose ps</code> で確認。<code>NEXT_PUBLIC_API_URL</code> が正しく設定されているか確認。</p>
                    </div>
                    <div>
                        <p class="font-bold">ページ遷移後に画面が真っ白になる</p>
                        <p class="text-gray-600">→ ブラウザのDevTools（F12）→ Consoleタブでエラーを確認。エラーメッセージをそのままClaude Codeに貼り付けて質問。</p>
                    </div>
                    <div>
                        <p class="font-bold">記事投稿時に401エラー</p>
                        <p class="text-gray-600">→ APIクライアント（lib/api.ts）でAuthorizationヘッダーにトークンを付与しているか確認。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- デバッグのコツ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">デバッグのコツ</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-6">
                    <div>
                        <h3 class="font-bold text-red-600 mb-2">エラーが出たら</h3>
                        <p class="text-sm text-gray-600 mb-2">エラーメッセージをそのままClaude Codeに貼り付けてください。</p>
                        <div class="code-block p-3 rounded font-mono text-xs overflow-x-auto">
<pre>以下のエラーが出ました。原因と修正方法を教えてください。

[エラーメッセージをここに貼り付け]</pre>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-bold text-blue-600 mb-2">バックエンドのログ確認</h3>
                        <p class="text-sm text-gray-600 mb-2">Claude Codeに以下を指示するとログを確認できます。</p>
                        <div class="code-block p-3 rounded font-mono text-xs">
                            docker compose logs -f backend
                        </div>
                    </div>
                    <div>
                        <h3 class="font-bold text-purple-600 mb-2">フロントエンドのデバッグ</h3>
                        <p class="text-sm text-gray-600">ブラウザのDevTools（F12キー）を開き：</p>
                        <ul class="text-sm text-gray-600 mt-1 space-y-1">
                            <li>・<strong>Console</strong>タブ → JavaScriptエラーの確認</li>
                            <li>・<strong>Network</strong>タブ → APIリクエストのステータスコードとレスポンスの確認</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold text-green-600 mb-2">データベースの確認</h3>
                        <div class="code-block p-3 rounded font-mono text-xs overflow-x-auto">
<pre><span class="text-green-400"># MySQLに接続してデータを確認</span>
docker compose exec db mysql -u bloguser -pblogpassword blog
&gt; SELECT * FROM users;
&gt; SELECT * FROM posts;</pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="blog-design.php" class="flex items-center text-gray-600 hover:text-indigo-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                設計編
            </a>
            <a href="blog-finishing.php" class="flex items-center bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700">
                次へ：仕上げ編
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>


<?php include 'includes/footer.php'; ?>
