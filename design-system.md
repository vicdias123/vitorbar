/* Design System - Escritório de Advocacia

CORES
Primary: #2c3e50 (Azul escuro)
Secondary: #3498db (Azul)
Accent: #e74c3c (Vermelho)
Text: #333333
Light Gray: #f5f6fa
White: #ffffff

TIPOGRAFIA
Família principal: 'Roboto', sans-serif
Família secundária: 'Playfair Display', serif

Hierarquia:
H1: 2.5rem (40px) - Playfair Display
H2: 2rem (32px) - Playfair Display
H3: 1.5rem (24px) - Roboto
H4: 1.25rem (20px) - Roboto
Body: 1rem (16px) - Roboto
Small: 0.875rem (14px) - Roboto

ESPAÇAMENTO
xs: 4px
sm: 8px
md: 16px
lg: 24px
xl: 32px
xxl: 48px

SOMBRAS
Level 1: 0 2px 4px rgba(0,0,0,0.1)
Level 2: 0 4px 8px rgba(0,0,0,0.1)
Level 3: 0 8px 16px rgba(0,0,0,0.1)

BORDER RADIUS
Small: 4px
Medium: 8px
Large: 12px
Circle: 50%

COMPONENTES

1. Botões
Primary:
- Background: #3498db
- Text: #ffffff
- Hover: #2980b9
- Padding: 12px 24px
- Border-radius: 4px

Secondary:
- Background: transparent
- Border: 1px solid #3498db
- Text: #3498db
- Hover Background: #3498db10

2. Cards
- Background: #ffffff
- Border-radius: 8px
- Padding: 24px
- Shadow: 0 2px 4px rgba(0,0,0,0.1)

3. Formulários
Input:
- Height: 40px
- Padding: 8px 12px
- Border: 1px solid #ddd
- Border-radius: 4px
- Focus: border-color: #3498db

4. Tabelas
- Header Background: #f8f9fa
- Border: 1px solid #eee
- Row Hover: #f8f9fa
- Padding: 12px 16px

5. Alertas
Success:
- Background: #d4edda
- Border: #c3e6cb
- Text: #155724

Error:
- Background: #f8d7da
- Border: #f5c6cb
- Text: #721c24

Warning:
- Background: #fff3cd
- Border: #ffeeba
- Text: #856404

Info:
- Background: #cce5ff
- Border: #b8daff
- Text: #004085

6. Navegação
Sidebar:
- Width: 250px
- Background: #2c3e50
- Text: #ffffff

Header:
- Height: 70px
- Background: #ffffff
- Shadow: 0 2px 4px rgba(0,0,0,0.1)

7. Modal
- Background: #ffffff
- Border-radius: 8px
- Shadow: 0 8px 16px rgba(0,0,0,0.1)
- Overlay: rgba(0,0,0,0.5)

8. Tabs
- Border-bottom: 1px solid #eee
- Active: border-bottom: 2px solid #3498db
- Hover: #f8f9fa

9. Ícones
- Tamanho base: 16px
- Cor: herda do texto
- Set: Font Awesome

GRID SYSTEM
- Containers: 1200px max-width
- Gutters: 24px
- Columns: 12
- Breakpoints:
  - xs: 0
  - sm: 576px
  - md: 768px
  - lg: 992px
  - xl: 1200px

ANIMAÇÕES
Transições:
- Default: 0.3s ease
- Modal: 0.3s ease-in-out
- Hover: 0.2s ease

Efeitos:
- Scale on hover: transform: scale(1.05)
- Fade in: opacity 0.3s ease-in-out
- Slide in: transform 0.3s ease-in-out

ESTADOS
Hover:
- Opacity: 0.8
- Background lighten: 10%
- Shadow increase

Focus:
- Outline: none
- Ring: 2px solid #3498db40

Active:
- Transform: scale(0.98)
- Background darken: 10%

Disabled:
- Opacity: 0.5
- Cursor: not-allowed

RESPONSIVIDADE
Mobile first
Flexbox e Grid para layouts
Media queries nos breakpoints definidos
