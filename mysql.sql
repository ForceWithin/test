SELECT * FROM books 
LEFT JOIN categories ON books.id = category.book_id 
LEFT JOIN authors on books.author_id = authors.id;  
