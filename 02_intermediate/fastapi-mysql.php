<?php
$page_title = 'FastAPI + MySQL - AI×Web開発 中級編 | AI Tech Stack';
$current_page = 'mysql';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
$section_name = '第3部：MySQL連携';
$step_number = 9;
$total_steps = 24;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">FastAPI + MySQL</h1>

        <!-- イントロ -->
        <div class="bg-green-50 border-l-4 border-green-500 p-6 mb-8">
            <p class="text-lg">FastAPIとMySQLをSQLAlchemyで接続。PythonからMySQLを操作する方法を学びます。</p>
        </div>

        <!-- 必要なパッケージ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">必要なパッケージ</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">requirements.txt</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>fastapi==0.109.0
uvicorn[standard]==0.27.0
sqlalchemy==2.0.25
pymysql==1.1.0
cryptography==42.0.0
python-dotenv==1.0.0
pydantic[email]==2.5.3</pre>
                </div>
                <p class="text-sm text-gray-500 mt-3">
                    <code>pymysql</code>: PythonからMySQLに接続するドライバー<br>
                    <code>sqlalchemy</code>: PythonのORM（Object-Relational Mapping）
                </p>
            </div>
        </section>

        <!-- データベース接続 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">データベース接続設定</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">database.py</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>from sqlalchemy import create_engine
from sqlalchemy.orm import sessionmaker, declarative_base
import os

# 環境変数から接続情報を取得
DATABASE_URL = os.getenv(
    "DATABASE_URL",
    "mysql+pymysql://myuser:mypassword@localhost:3306/myapp"
)

# エンジン作成
engine = create_engine(
    DATABASE_URL,
    echo=True,  # SQLログを出力（開発時のみ）
    pool_pre_ping=True,  # 接続の有効性チェック
)

# セッションファクトリ
SessionLocal = sessionmaker(autocommit=False, autoflush=False, bind=engine)

# モデルの基底クラス
Base = declarative_base()

# 依存性注入用
def get_db():
    db = SessionLocal()
    try:
        yield db
    finally:
        db.close()</pre>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>接続URL形式：</strong><code>mysql+pymysql://ユーザー:パスワード@ホスト:ポート/データベース名</code></p>
            </div>
        </section>

        <!-- モデル定義 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">モデル定義</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">models.py</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>from sqlalchemy import Column, Integer, String, Text, DateTime, ForeignKey
from sqlalchemy.orm import relationship
from sqlalchemy.sql import func
from database import Base


class User(Base):
    __tablename__ = "users"

    id = Column(Integer, primary_key=True, index=True)
    email = Column(String(255), unique=True, nullable=False, index=True)
    name = Column(String(100), nullable=False)
    password_hash = Column(String(255), nullable=False)
    created_at = Column(DateTime, server_default=func.now())
    updated_at = Column(DateTime, server_default=func.now(), onupdate=func.now())

    # リレーション
    posts = relationship("Post", back_populates="author", cascade="all, delete-orphan")


class Post(Base):
    __tablename__ = "posts"

    id = Column(Integer, primary_key=True, index=True)
    title = Column(String(255), nullable=False)
    content = Column(Text, nullable=False)
    author_id = Column(Integer, ForeignKey("users.id"), nullable=False, index=True)
    created_at = Column(DateTime, server_default=func.now())
    updated_at = Column(DateTime, server_default=func.now(), onupdate=func.now())

    # リレーション
    author = relationship("User", back_populates="posts")</pre>
                </div>
            </div>
        </section>

        <!-- スキーマ定義 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">Pydanticスキーマ</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">schemas.py</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>from pydantic import BaseModel, EmailStr
from datetime import datetime


# User スキーマ
class UserBase(BaseModel):
    email: EmailStr
    name: str

class UserCreate(UserBase):
    password: str

class UserResponse(UserBase):
    id: int
    created_at: datetime

    class Config:
        from_attributes = True


# Post スキーマ
class PostBase(BaseModel):
    title: str
    content: str

class PostCreate(PostBase):
    pass

class PostResponse(PostBase):
    id: int
    author_id: int
    created_at: datetime
    updated_at: datetime

    class Config:
        from_attributes = True

class PostWithAuthor(PostResponse):
    author: UserResponse</pre>
                </div>
            </div>
        </section>

        <!-- CRUD操作 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">CRUD操作</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">crud.py</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>from sqlalchemy.orm import Session
from models import User, Post
from schemas import UserCreate, PostCreate
from passlib.context import CryptContext

pwd_context = CryptContext(schemes=["bcrypt"], deprecated="auto")


# ========== User ==========
def get_user(db: Session, user_id: int):
    return db.query(User).filter(User.id == user_id).first()

def get_user_by_email(db: Session, email: str):
    return db.query(User).filter(User.email == email).first()

def create_user(db: Session, user: UserCreate):
    hashed_password = pwd_context.hash(user.password)
    db_user = User(
        email=user.email,
        name=user.name,
        password_hash=hashed_password
    )
    db.add(db_user)
    db.commit()
    db.refresh(db_user)
    return db_user


# ========== Post ==========
def get_posts(db: Session, skip: int = 0, limit: int = 10):
    return db.query(Post).order_by(Post.created_at.desc()).offset(skip).limit(limit).all()

def get_post(db: Session, post_id: int):
    return db.query(Post).filter(Post.id == post_id).first()

def create_post(db: Session, post: PostCreate, author_id: int):
    db_post = Post(**post.model_dump(), author_id=author_id)
    db.add(db_post)
    db.commit()
    db.refresh(db_post)
    return db_post

def update_post(db: Session, post_id: int, post: PostCreate):
    db_post = db.query(Post).filter(Post.id == post_id).first()
    if db_post:
        db_post.title = post.title
        db_post.content = post.content
        db.commit()
        db.refresh(db_post)
    return db_post

def delete_post(db: Session, post_id: int):
    db_post = db.query(Post).filter(Post.id == post_id).first()
    if db_post:
        db.delete(db_post)
        db.commit()
        return True
    return False</pre>
                </div>
            </div>
        </section>

        <!-- APIエンドポイント -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">APIエンドポイント</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">main.py</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>from fastapi import FastAPI, Depends, HTTPException
from sqlalchemy.orm import Session
from database import engine, get_db, Base
import models
import schemas
import crud

# テーブル作成
Base.metadata.create_all(bind=engine)

app = FastAPI()


# ========== User エンドポイント ==========
@app.post("/users", response_model=schemas.UserResponse, status_code=201)
def create_user(user: schemas.UserCreate, db: Session = Depends(get_db)):
    db_user = crud.get_user_by_email(db, email=user.email)
    if db_user:
        raise HTTPException(status_code=400, detail="Email already registered")
    return crud.create_user(db=db, user=user)


# ========== Post エンドポイント ==========
@app.get("/posts", response_model=list[schemas.PostWithAuthor])
def read_posts(skip: int = 0, limit: int = 10, db: Session = Depends(get_db)):
    posts = crud.get_posts(db, skip=skip, limit=limit)
    return posts

@app.get("/posts/{post_id}", response_model=schemas.PostWithAuthor)
def read_post(post_id: int, db: Session = Depends(get_db)):
    db_post = crud.get_post(db, post_id=post_id)
    if db_post is None:
        raise HTTPException(status_code=404, detail="Post not found")
    return db_post

@app.post("/posts", response_model=schemas.PostResponse, status_code=201)
def create_post(
    post: schemas.PostCreate,
    author_id: int,  # 後で認証から取得するように変更
    db: Session = Depends(get_db)
):
    return crud.create_post(db=db, post=post, author_id=author_id)

@app.put("/posts/{post_id}", response_model=schemas.PostResponse)
def update_post(
    post_id: int,
    post: schemas.PostCreate,
    db: Session = Depends(get_db)
):
    db_post = crud.update_post(db, post_id=post_id, post=post)
    if db_post is None:
        raise HTTPException(status_code=404, detail="Post not found")
    return db_post

@app.delete("/posts/{post_id}", status_code=204)
def delete_post(post_id: int, db: Session = Depends(get_db)):
    success = crud.delete_post(db, post_id=post_id)
    if not success:
        raise HTTPException(status_code=404, detail="Post not found")
    return None</pre>
                </div>
            </div>
        </section>

        <!-- ファイル構成 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">ファイル構成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="code-block p-4 rounded font-mono text-sm">
<pre>backend/
├── main.py           # FastAPIアプリ・エンドポイント
├── database.py       # DB接続設定
├── models.py         # SQLAlchemyモデル
├── schemas.py        # Pydanticスキーマ
├── crud.py           # CRUD操作
├── requirements.txt  # パッケージ
└── Dockerfile</pre>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">まとめ</h2>
            <div class="bg-green-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-green-600 mr-2">✓</span>
                        <span>SQLAlchemy + pymysqlでMySQLに接続</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-600 mr-2">✓</span>
                        <span>モデル（models.py）でテーブル構造を定義</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-600 mr-2">✓</span>
                        <span>スキーマ（schemas.py）でAPIの入出力を定義</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-600 mr-2">✓</span>
                        <span>CRUD操作を関数として分離</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-600 mr-2">✓</span>
                        <span>Dependsでセッションを依存性注入</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="mysql-intro.php" class="flex items-center text-gray-600 hover:text-green-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                MySQL入門
            </a>
            <a href="migration.php" class="flex items-center bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">
                次へ：マイグレーション
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
