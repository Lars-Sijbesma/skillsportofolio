// See https://aka.ms/new-console-template for more information
Console.WriteLine("Wat is jouw voornaam?");
string? naam1 = "Bob";
naam1 = Console.ReadLine();
Console.WriteLine("Wat is jouw achternaam?");
string? naam2 = "De Bouwer";
naam2 = Console.ReadLine();
string naam3 = naam1 + " " + naam2;
Console.WriteLine("Leuk je te ontmoeten " + naam3);