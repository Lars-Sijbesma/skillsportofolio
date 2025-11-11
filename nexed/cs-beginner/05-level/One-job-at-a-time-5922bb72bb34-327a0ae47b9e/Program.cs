using System;

class Program
{
    // Methode om per woord het aantal kleine letters te tellen
    static int CountLowercaseCharacters(string word)
    {
        int lowercaseCount = 0;
        foreach (char c in word)
        {
            if (char.IsLower(c))
            {
                lowercaseCount++;
            }
        }
        return lowercaseCount;
    }

    // Methode om door de array te itereren en het totaal aantal kleine letters te tellen
    static int CountLowercaseCharactersInArray(string[] words)
    {
        int totalLowercaseCount = 0;

        foreach (string word in words)
        {
            int lowercaseCount = CountLowercaseCharacters(word);
            Console.WriteLine($"Het woord '{word}' bevat {lowercaseCount} kleine letters.");
            totalLowercaseCount += lowercaseCount;
        }

        return totalLowercaseCount;
    }

    static void Main(string[] args)
    {
        string[] words = { "Bit", "Academy", "Bit-Academy", "bit", "-", "AcAdEmY" };
        int totalLowercaseCount = CountLowercaseCharactersInArray(words);
        Console.WriteLine($"\nHet totaal aantal kleine letters in de array is: {totalLowercaseCount}");

    }
}